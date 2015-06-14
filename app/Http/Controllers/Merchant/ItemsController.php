<?php namespace App\Http\Controllers\Merchant;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Role;
use App\models\User;
use App\models\Permission;
use Illuminate\Http\Request;
use App\models\Item;
use Redirect;
class ItemsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
 		if(Auth::user()->hasRole('merchant')){
			$user_id = Auth::user()->id;
			$items=Item::where('user_id',$user_id)->paginate(5);
                	return view('merchant.listitems',['items' => $items]);
		}else {
			return Redirect::to('home');
	     	}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	 $item = Item::find($id);
	 $item->userswebsiteinfo->status = 1;
		 
         return Redirect::back()->with('message','Updated Successful !');
	}
	public function requestToPublish($id)
	{
	 $item = Item::find($id);
	 $item->publish = 2;
	 $item->save();	 
         return Redirect::back()->with('message','Updated Successful !');
	}
	public function publishit($id)
	{
	 $item = Item::find($id);
	 $item->publish = 5;
	 $item->save();	 
         return Redirect::back()->with('message','Updated Successful !');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
