<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Magento</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />   
     
    <!-- Google Fonts
    ================================================== -->
    <!-- Oswald -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
    
    <!-- Le CSS
    ================================================== -->
    <!-- These are all the CSS files -->
    
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/pages.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('/css/responsive-grid.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/isotope.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css"/>
    <!-- Le javascript
    ================================================== -->
    <!-- These are all the javascript files -->
    {!! HTML::script('js/jquery-1.7.1.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/load-more.js') !!}
    {!! HTML::script('js/jquery.isotope.min.js') !!}
    {!! HTML::script('js/jquery.infinitescroll.min.js') !!}
    {!! HTML::script('js/jquery.browser.mobile.js') !!}
    {!! HTML::script('js/jquery.manual-trigger.js') !!}    
    {!! HTML::script('js/jquery.ba-bbq.min.js') !!}
    {!! HTML::script('js/jquery.fancybox.js') !!}
   
    <!-- Le preloader
    ================================================== -->
    <!-- Script to make sure everything loads -->
    <script type="text/javascript">
        //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $("#status").fadeOut(); // will first fade out the loading animation
                $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
                $("#preloader-container").css("position","static");

            })
        //]]>
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64329202-1', {
  'cookieDomain': 'none'
});
  ga('send', 'pageview');

</script>
  </head>


<body onload="initialize()">

<script>
var trackOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
     function () {
     document.location = url;
     }
   });
}
</script> <!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- Le Header
================================================== -->
<!-- This is the logo and navigation -->

	<div class="navigation">
		<nav>
			
			<!-- Slap your MOBILE logo here -->
			<a class="mobile-logo" data-toggle="collapse" data-target="#nav-collapse">
				<span>U Can Prefer</span>
			</a>
			
			<!-- NAVIGATION
			================================================== -->
			<!-- Navigation begins here -->
			
			<div id="nav-collapse" class="collapse">
				<ul class="nav">
				
					<!-- Slap your logo here -->
					<li class="logo"><a>U Can Prefer</a></li>
					
					<!-- portfolio (drop down) -->
					<li>
						<a href="#filter=.portfolio" class="selected"><span data-toggle="collapse" data-target="#portfolio-collapse"></span>PORTFOLIO</a>
						<ul id="portfolio-collapse" class="collapse out">
							<li><a href="#filter=.graphics">GRAPHICS</a></li>
							<li><a href="#filter=.illustration">ILLUSTRATION</a></li>
							<li><a href="#filter=.web">WEBDESIGN</a></li>
						</ul>
					</li>
					
					<!-- blog -->
					<li><a href="#filter=.blog">BLOG</a></li>
					
					<!-- grid widgets -->
					<li>
						<a href="#filter=.grid-widget">GRID WIDGETS</a>
					</li>
					
					<!-- elements -->
					<li>
						<a href="#filter=.shortcodes">ELEMENTS</a>
					</li>
					
					<!-- pages (drop down) -->
					<li>
						<a><span data-toggle="collapse" data-target="#pages-collapse"></span>PAGES</a>
						<ul id="pages-collapse" class="collapse out">
<?php if (Auth::guest())
{ ?>
							<li><a href="<?php echo url().'/auth/login';?>">LOGIN</a></li>
							<li><a href="<?php echo url().'/auth/customerregister';?>">REGISTER</a></li>
<?php } else {?>
                                                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
<?php } ?>
							<li><a href="#filter=.page-contact">CONTACT</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>	 
		<div class="nav-arrow">
		</div>
	</div>
	
<div id="preloader-container">

<div id="container">	

	<?php $renamed_host=str_replace("/index.php","",url());?>
	<?php foreach($items->getCollection()->all() as $item) { ?>
	<div class="widget homepage">
	
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a class="fancybox" href="<?php echo $renamed_host.$item->image;?>">
					<span class="entry-image-overlay"></span>
					<img alt="" src="<?php echo $renamed_host.$item->image;?>">
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="<?php echo $item->url;?>" onclick="trackOutboundLink('<?php echo $item->url;?>'); return false;" target="_blank">
		   				<?php echo $item->name; ?>
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<?php echo $item->description;?>
		   		
	   			<div class="entry-footer">
	   				<ul>
	   					<li class="left"><h5><?php echo $item->price; ?></h5></li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
	   			</div>		   		
		   		 	
		   		<div class="stripes"></div>
			</div>			
		</div>
	
</div>
	<?php } ?>
	
	
	
		           
</div> <!-- #container -->


<!-- Load more pagination
================================================== -->
<!-- When this link is clicked, the blog will load this content dynamically -->

<nav id="page_nav">
   <a href="http://localhost/magelaravel/public/index.php?page=2"></a>
</nav>

<!-- Footer
================================================== -->
<!-- Copyright & Social Buttons -->
 
 <div class="footer">
 	<ul>
		
		<li class="left">© Copyright 2015 <a href="#">Kensium Solutions</a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Facebook">
<img height="24px" src="<?php echo $renamed_host.'/images/social-icons/fb.png';?>" alt="" /></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Google+">
<img height="24px" src="<?php echo $renamed_host.'/images/social-icons/gplus.png';?>" alt=""/></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Twitter">
<img height="24px" src="<?php echo $renamed_host.'/images/social-icons/twitter.png';?>" alt=""/></a></li>		
		<li class="social-button right"><a rel="alternate" data-original-title="Pinterest">
<img height="24px" src="<?php echo $renamed_host.'/images/social-icons/pin.png';?>" alt="" /></a></li>

 	</ul>
 </div>
 </div>
 
 <!-- CHANGE HOVER TO ON CLICK FOR MOBILE DEVICES
 ================================================== -->
 
 <script>
 var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
 
 if (isiPad) { 
	 $("nav ul li").click(function() {
	 	event.stopPropagation();
	 	$("ul", this).toggle();
	 });
	
	$(document).click( function(){
		$('nav ul li > ul').hide();
	});
}
 </script>



<!-- JQUERY (tooltips)
================================================== -->
<!-- Script for the awesome tooltips -->

<script>
$("[rel=alternate]").tooltip()
</script>

<!-- JQUERY (hash)
================================================== -->
<!-- reexcute scripts on hash change -->

<script>

$(window).bind( 'hashchange', function( event ) {
  $.getScript("js/load-more.js")
});

</script>



<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			helpers : {
			        overlay : {
			            locked : false
			        }
			    },
			    
			    padding: ['5px', '5px', '5px', '5px']
		});
	});
</script>


{!! HTML::script('js/jquery.isotope_custom.js') !!}

  </body>
</html>
