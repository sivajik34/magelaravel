<?php 
namespace App\Http\Controllers\Merchant;
use App\Http\Controllers\Controller;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Buzz\Client\Curl;
use App\models\Userswebsiteinfo;
use Auth;
use App\models\Item;
use Illuminate\Support\Facades\Redirect;
use Image;
class ItemsyncController extends Controller {

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
	public function index(){
		return view('merchant.itemsync');
	}
	/**
	 * 
	 *
	 * @return Response
	 */
	public function sync()
	{
		$user_id = Auth::user()->id;		
		$model = Userswebsiteinfo::where('user_id', '=', $user_id)->firstOrFail();
		$host=$model->host;
		$resource='rest/V1/products?searchCriteria[filter_groups][0][filters][0][field]=kensium&searchCriteria[filter_groups][0][filters][0][value]=1&searchCriteria[filter_groups][0][filters][0][condition_type]=eq&searchCriteria[current_page]=1&searchCriteria[page_size]=25';
		$request = new Request('GET',$resource,$host);
		$response = new Response();
		$client = new Curl();  
		$client->send($request, $response);
		$result = json_decode($response->getContent());
		$status_code=$response->getStatusCode();		
               if($status_code=="400" && $result->message=="Invalid attribute name: %1" && $result->parameters[0]=="kensium")
		{
		return "please create product custom attribute 'kensium'";
		}	
		if (!file_exists(public_path().'/images/'.$user_id)) {
    		mkdir(public_path().'/images/'.$user_id, 0777, true);
		}	
		if(isset($result->items) && $result->items!=null)
                {
			foreach($result->items as $product)
			{
				$this->saveItem($product,$user_id,$host);	                  	
			}
 		} else {
 			echo "nothing synced";
		       }

	}
	public function appendSync(){ 
		  
		$user_id = Auth::user()->id;				
		$model = Userswebsiteinfo::where('user_id', '=', $user_id)->firstOrFail();
		$host=$model->host;
		$resource='rest/V1/products?searchCriteria[filter_groups][0][filters][0][field]=kensium&searchCriteria[filter_groups][0][filters][0][value]=1&searchCriteria[filter_groups][0][filters][0][condition_type]=eq&searchCriteria[current_page]=1&searchCriteria[page_size]=25';
		$request = new Request('GET',$resource,$host);
		$response = new Response();
		$client = new Curl();  
		$client->send($request, $response);
		$result = json_decode($response->getContent());
		$status_code=$response->getStatusCode();		
               if($status_code=="400" && $result->message=="Invalid attribute name: %1" && $result->parameters[0]=="kensium")
		{
		return "please create product custom attribute 'kensium'";
		}	
		if (!file_exists(public_path().'/images/'.$user_id)) {
    		mkdir(public_path().'/images/'.$user_id, 0777, true);
		}	
		if(isset($result->items) && $result->items!=null)
                {
			$items = Item::where('user_id',$user_id)->get();
			$skuarr=$items->lists('sku');
			foreach($result->items as $product)
			{
				if (in_array($product->sku, $skuarr))
  				{ continue; }
				$this->saveItem($product,$user_id,$host);	                  	
			}
 		} else {
 			echo "nothing synced";
		       }
          }

	protected function saveItem($product,$user_id,$host){
			//echo "<pre>";print_r($product);exit;
			$item = Item::firstOrNew(array('user_id' => $user_id,'sku'=>$product->sku,'store_id'=>$product->store_id));
               		$item->user_id= $user_id;
                        $item->sku    = $product->sku;
                	$item->status    = $product->status;
			$item->name   = $product->name;
                	$item->store_id=$product->store_id;
                	$item->price = $product->price;
                	$renamed_host=str_replace("index.php/","",$host);
			foreach($product->custom_attributes as $key=>$custom_attribute){
			if($custom_attribute->attribute_code=="image"){
			$image_file=$renamed_host."/pub/media/catalog/product".$custom_attribute->value;
			$extension = pathinfo($image_file, PATHINFO_EXTENSION);
			$filenameOut = public_path().'/images/'.$user_id.'/'.$product->sku.".".$extension;
			$ch = curl_init($image_file);
			$fp = fopen($filenameOut, 'wb');
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_exec($ch);
			curl_close($ch);
			fclose($fp);
               	        $item->image='/images/'.$user_id.'/'.$product->sku.".".$extension; 
 			$renamed_host=str_replace("/index.php","",url());
			$path=$renamed_host.$item->image;
			$extension = pathinfo($path, PATHINFO_EXTENSION);
			$filenameOut = public_path().'/images/'.$item->user_id.'/small_'.$item->sku.".".$extension;
       			$img=Image::make($path)->resize(75, 75)->save($filenameOut);
                        $item->thumbnail_image='/images/'.$user_id.'/small_'.$product->sku.".".$extension;
			}
			if($custom_attribute->attribute_code=="description"){
			$item->description=$custom_attribute->value;
			}
			if($custom_attribute->attribute_code=="meta_title"){
			$item->meta_title=$custom_attribute->value;
			}
			if($custom_attribute->attribute_code=="meta_keyword"){
			$item->meta_keywords=$custom_attribute->value;
			}
			if($custom_attribute->attribute_code=="meta_description"){
			$item->meta_description=$custom_attribute->value;
			}
			if($custom_attribute->attribute_code=="url_key"){
			$item->url = $custom_attribute->value.'.html';  
			}
			}
			
                        $item->publish=Item::SYNCED;               	        
			$item->save();
			echo "   ".$product->name." saved to db<br />";
			//echo(str_repeat(' ', 256));
    		        //flush();
   		        //ob_flush();
    			//sleep(1); 
	}

}
