<?php namespace App\Http\Controllers\Admin;
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

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
 		if(Auth::user()->hasRole('admin')){
			$items=Items::all()->get();
                	return view('admin.listitems',['items' => $items]);
		}else {
			return Redirect::to('home');
	     	}
	}
	public function merchantItems($id)
	{

 		if(Auth::user()->hasRole('admin')){
			$items=Item::Where('user_id',$id)->paginate(5);
                	return view('admin.listitems',['items' => $items]);
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
	public function publishAccept($id)
	{
	  $item = Item::find($id);
	 $item->publish = 3;
	 $item->save();	 
         return Redirect::back()->with('message','Updated Successful !');
	}
	public function publishReject($id)
	{
	  $item = Item::find($id);
	 $item->publish = 4;
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
