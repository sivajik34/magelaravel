<?php namespace App\Http\Controllers;
use App\Item;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	$items = Item::where('user_id', '=', 1)->get();
        //echo "<pre>";print_r($items);exit;
		//return view('welcome');
               return view('list')->with('items', $items);
	}
	public function check()
	{
return 	"<div class='widget homepage'>
	
		<div class='entry-container span4'>
		
			<!-- Portfolio Image -->
			<div class='entry-image'>
				<a href='http://localhost/magelaravel/public/images/1/24-MB04.jpg' class='fancybox'>
					<span class='entry-image-overlay'></span>
					<img src='http://localhost/magelaravel/public/images/1/24-MB04.jpg' alt=' '>
				</a>
			</div>
		   		 
		   	<div class='entry drop-shadow curved '>
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class='heading'>
		   			<a href='strive-shoulder-pack.html'>
		   				Strive Shoulder Pack		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</p>
<ul>
<li>Zippered main compartment.</li>
<li>Front zippered pocket.</li>
<li>Side mesh pocket.</li>
<li>Cell phone pocket on strap.</li>
<li>Adjustable shoulder strap and top carry handle.</li>
</ul>		   		
	   			<div class='entry-footer'>
	   				<ul>
	   					<li class='left'><h5>32</h5></li>
	   					<li class='right no-margin'><div class='icon like'></div> 3</li>
	   		
	   				</ul>
	   			</div>		   		
		   		 	
		   		<div class='stripes'></div>
			</div>			
		</div>
	
</div>";
	}
}
