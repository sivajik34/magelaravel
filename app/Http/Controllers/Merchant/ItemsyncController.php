<?php
namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Buzz\Message\Request as BuzzRequest;
use Response;
use Request;

;
use Buzz\Message\Response as BuzzResponse;
use Buzz\Client\Curl;
use App\models\Userswebsiteinfo;
use Auth;
use App\models\Item;
use Image;
use Session;

class ItemsyncController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Itemsync Controller
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $items = Item::where('user_id', '=', $user_id)->lists('sku', 'sku');
        return view('merchant.itemsync', ['items' => $items]);
    }

    /**
     *
     *
     * @return Response
     */
    public function sync()
    {
        $sync_type = Request::input('sync_type');
        $user_id = Auth::user()->id;
        $model = Userswebsiteinfo::where('user_id', '=', $user_id)->firstOrFail();
        $host = $model->host;
        $resource = 'rest/V1/products?searchCriteria[filter_groups][0][filters][0][field]=kensium&searchCriteria[filter_groups][0][filters][0][value]=1&searchCriteria[filter_groups][0][filters][0][condition_type]=eq&searchCriteria[current_page]=1&searchCriteria[page_size]=25';
        $buzzrequest = new BuzzRequest('GET', $resource, $host);
        $buzzresponse = new BuzzResponse();
        $client = new Curl();
        Session::put('progress', "Item Collection API calling...");
        Session::save();
        $client->send($buzzrequest, $buzzresponse);
        $result = json_decode($buzzresponse->getContent());
        $status_code = $buzzresponse->getStatusCode();
        if ($status_code == "400" && $result->message == "Invalid attribute name: %1" && $result->parameters[0] == "kensium") {
            Session::put('progress', "failed");
            Session::save();
            return response()->json(['syncstatus' => "please create product custom attribute 'kensium'"]);

        }
        if (!file_exists(public_path() . '/images/' . $user_id)) {
            mkdir(public_path() . '/images/' . $user_id, 0777, true);
        }
        if (isset($result->items) && $result->items != null) {
            if ($sync_type == "2") {
                $items = Item::where('user_id', $user_id)->get();
                $skuarr = $items->lists('sku');
            }
            Session::put('progress', "No of items to sync:" . count($result->items));
            Session::save();
            foreach ($result->items as $product) {
                if ($sync_type == "2") {
                    if (in_array($product->sku, $skuarr)) {
                        continue;
                    }
                }
                $this->itemsync($product->sku, $user_id, $host);

            }
        } else {
            return response()->json(['syncstatus' => 'nothing synced']);
        }
        Session::put('progress', "completed");
        Session::save();
        return response()->json(['syncstatus' => 'success']);


    }

    public function getProgress()
    {
        return response::json(array(Session::get('progress')));
    }

    protected function itemsync($sku, $user_id, $host)
    {
        $product_resource = 'rest/V1/products/' . $sku;
        $buzzreq = new BuzzRequest('GET', $product_resource, $host);
        $buzzres = new BuzzResponse();
        $client = new Curl();
        Session::put('progress', $sku . "API call started");
        Session::save();
        $client->send($buzzreq, $buzzres);
        $res = json_decode($buzzres->getContent());
        $status_code = $buzzres->getStatusCode();
        //echo "<pre>";
        //print_r($res);
        //echo $status_code;exit;
        if ($status_code == 200)
            $this->saveItem($res, $user_id, $host);
    }

    public function itemresync()
    {
        $sku = Request::input('sku');
        $user_id = Auth::user()->id;
        $model = Userswebsiteinfo::where('user_id', '=', $user_id)->firstOrFail();
        $host = $model->host;
        $this->itemsync($sku, $user_id, $host);
        Session::put('progress', "completed");
        Session::save();
        return response()->json(['syncstatus' => 'success']);
    }

    protected function saveItem($product, $user_id, $host)
    {
        //echo "<pre>";print_r($product);exit;
        $item = Item::firstOrNew(array('user_id' => $user_id, 'sku' => $product->sku, 'store_id' => $product->store_id));
        $item->user_id = $user_id;
        $item->sku = $product->sku;
        $item->status = $product->status;
        $item->name = $product->name;
        $item->store_id = $product->store_id;
        $item->price = $product->price;
        $item->visibility = $product->visibility;
        $item->type_id = $product->type_id;
        $renamed_host = str_replace("index.php/", "", $host);
        foreach ($product->custom_attributes as $key => $custom_attribute) {
            $custom_attr_code = $custom_attribute->attribute_code;
            switch ($custom_attr_code) {
                case "image" :
                    $image_file = $renamed_host . "/pub/media/catalog/product" . $custom_attribute->value;
                    $extension = pathinfo($image_file, PATHINFO_EXTENSION);
                    $filenameOut = public_path() . '/images/' . $user_id . '/' . $product->sku . "." . $extension;
                    $ch = curl_init($image_file);
                    $fp = fopen($filenameOut, 'wb');
                    curl_setopt($ch, CURLOPT_FILE, $fp);
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_exec($ch);
                    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);
                    fclose($fp);
                    if ($retcode == 200) {
                        $item->image = '/images/' . $user_id . '/' . $product->sku . "." . $extension;
                        $renamed_host = str_replace("/index.php", "", url());
                        $path = $renamed_host . $item->image;
                        $extension = pathinfo($path, PATHINFO_EXTENSION);
                        $filenameOut = public_path() . '/images/' . $item->user_id . '/small_' . $item->sku . "." . $extension;
                        $img = Image::make($path)->resize(75, 75)->save($filenameOut);
                        $item->thumbnail_image = '/images/' . $user_id . '/small_' . $product->sku . "." . $extension;
                    } else {
                        $item->image = '/images/placeholder.png';
                        $item->thumbnail_image = '/images/rsz_placeholder.png';
                    }
                    break;
                case "description" :
                    $item->description = $custom_attribute->value;
                    break;
                case "meta_title" :
                    $item->meta_title = $custom_attribute->value;
                    break;
                case "meta_keyword" :
                    $item->meta_keywords = $custom_attribute->value;
                    break;
                case "meta_description" :
                    $item->meta_description = $custom_attribute->value;
                    break;
                case "url_key" :
                    $item->url = $host . $custom_attribute->value . '.html';
                    break;
                case "quantity_and_stock_status" :
                    $item->qty = $custom_attribute->value[1];
                    break;
            }


        }

        $item->publish = Item::SYNCED;
        $item->save();

    }

}
