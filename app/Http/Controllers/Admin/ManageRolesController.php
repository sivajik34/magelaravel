<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Role;
use App\models\User;
use App\models\Permission;
use Illuminate\Http\Request;
use Redirect;

class ManageRolesController extends Controller
{

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
        $users = User::with('userswebsiteinfo')->get();
        return view('admin.listmerchants', ['users' => $users]);
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
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::with('userswebsiteinfo')->find($id);
        $user->userswebsiteinfo->status = 1;
        $user->push();
        $merchant = Role::find(2);
        $user->attachRole($merchant);
        return Redirect::back()->with('message', 'Updated Successful !');
    }

    public function itemautoenable($id)
    {
        $user = User::with('userswebsiteinfo')->find($id);
        $user->userswebsiteinfo->item_auto_publish = 1;
        $user->push();        
        return Redirect::back()->with('message', 'Updated Successful !');
    }
    public function itemautodisable($id)
    {
        $user = User::with('userswebsiteinfo')->find($id);
        $user->userswebsiteinfo->item_auto_publish = 0;
        $user->push();        
        return Redirect::back()->with('message', 'Updated Successful !');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
