<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kensium Merchant Place</title>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<?php $renamed_host=str_replace("/index.php","",url());?>
				<a class="navbar-brand" href="#"><img src="<?php echo $renamed_host.'/images/kensium_logo.png';?>"/></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!--<li><a href="{{ url('/') }}" target="_blank">Home(front end store )</a></li>-->
					<?php if( is_object(Auth::user()) && Auth::user()->hasRole('admin')) { ?>
					<li><a href="{{ url('/admin/manageroles') }}">Merchants</a></li>
					<li><a href="#">Customers</a>
					</li><li><a href="#">Settings</a></li><li><a href="{{ url('/admin/reports') }}">Reports</a></li>
					<?php } ?>
					<?php if( is_object(Auth::user()) && Auth::user()->hasRole('merchant')) { ?>
					<li><a href="{{ url('/merchant/itemsync') }}" >Item sync</a></li>
					<li><a href="{{ url('/merchant/manageitems') }}">Items</a></li><li><a href="#">Customers</a>
					</li><li><a href="#">Settings</a></li><li><a href="#">Reports</a></li>
					<?php } else if(is_object(Auth::user()) && !(Auth::user()->hasRole('admin'))) {?><li style="margin-top:15px;">Admin approval pending for item sync.</li><?php }?>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	
</body>
</html>
