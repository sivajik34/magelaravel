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
use LaravelAnalytics;
use Carbon\Carbon;
class ReportsController extends Controller
{

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
        $present = Carbon::now();
        $start = Carbon::createFromDate(2015, 06, 01, 'GMT');
        $analyticsData = LaravelAnalytics::performQuery($start,$present, "ga:totalEvents", $others = array("dimensions"=>"ga:eventLabel"));
        return view('admin.reports', ['analyticsData' => $analyticsData]);
    }

    public function merchantItems($id)
    {

        $items = Item::Where('user_id', $id)->paginate(5);
        return view('admin.listitems', ['items' => $items]);

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
