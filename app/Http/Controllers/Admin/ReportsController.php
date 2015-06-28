<?php namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Role;
use App\models\User;
use App\models\Permission;
use Request;
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
	if (Request::has('start_date')&&Request::has('end_date'))
	{
    	$start_date = Request::input('start_date');
	$end_date = Request::input('end_date');
	$start=explode("/",$start_date);
	$end=explode("/",$end_date);
       //echo $start_date;echo $end_date; 
	$present = Carbon::createFromDate($end[2], $end[0], $end[1], 'GMT');
        $start = Carbon::createFromDate($start[2], $start[0], $start[1], 'GMT');
	}else{
	$present = Carbon::now();
	$start = Carbon::now()->subWeek();
	}
	
        $analyticsData = LaravelAnalytics::performQuery($start,$present, "ga:totalEvents", $others = array("dimensions"=>"ga:eventCategory%2Cga:eventLabel"));
        return view('admin.reports', ['analyticsData' => $analyticsData]);
    }

    
}
