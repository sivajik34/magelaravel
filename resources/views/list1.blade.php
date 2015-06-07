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
    <link rel="stylesheet" href="{{ asset('/css/flexslider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/isotope.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}" type="text/css"/>
    
    <!-- Le javascript
    ================================================== -->
    <!-- These are all the javascript files -->
    {!! HTML::script('js/jquery-1.7.1.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/jquery.flexslider-min.js') !!}
    {!! HTML::script('js/load-more.js') !!}
    {!! HTML::script('js/jquery.isotope.min.js') !!}
    {!! HTML::script('js/jquery.infinitescroll.min.js') !!}
    {!! HTML::script('js/jquery.browser.mobile.js') !!}
    {!! HTML::script('js/jquery.manual-trigger.js') !!}
    {!! HTML::script('js/maps.js') !!}
    {!! HTML::script('js/jquery.ba-bbq.min.js') !!}
    {!! HTML::script('js/jquery.fancybox.js') !!}
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClTutBaKZOqwVNwpXtZO51Zg-hhIRRlZM&amp;sensor=true"></script>
  
    
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
    
  </head>


<body onload="initialize()">

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<div id="map_canvas" style="opacity: 0; width:100%; height:100%"></div>


<!-- Le Header
================================================== -->
<!-- This is the logo and navigation -->

	<div class="navigation">
		<nav>
			
			<!-- Slap your MOBILE logo here -->
			<a class="mobile-logo" data-toggle="collapse" data-target="#nav-collapse">
				<span>SUPER GRID</span>
			</a>
			
			<!-- NAVIGATION
			================================================== -->
			<!-- Navigation begins here -->
			
			<div id="nav-collapse" class="collapse">
				<ul class="nav">
				
					<!-- Slap your logo here -->
					<li class="logo"><a>SUPER GRID</a></li>
					
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
							<li><a href="#filter=.page-about">ABOUT</a></li>
							<li><a href="#filter=.page-team">TEAM</a></li>
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

	<!--
	==================================================
	=====	ABOUT ME
	=====	this is the about me block
	================================================== -->
	
	<!--<div class="widget portfolio homepage">
		<div class="entry-container span-full">
		
		   	<div class="entry drop-shadow curved">
		   	
		   			<h2 class="textcenter oswald">WELCOME TO MY PORTFOLIO</h2>
		   			<p class="textcenter">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. <br> </p>

		   						   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>-->
	
	<!--
	==================================================
	=====	FEATURED
	=====	this is the featured portfolio block
	================================================== -->
	
	<div class="widget portfolio homepage grid-widget">
		<div class="entry-container span8">
		
			<div class="featured-stamp">
				<p>FEATURED</p>
			</div>
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/roman-jusdado-telly-detailed.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/roman-jusdado-telly-detailed.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="blog-single.html">
		   				PROJECT TITLE
		   			</a>
		   		</h5>
		   		
		   		<ul class="social">
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Dribbble"><img src="img/social-icons/glyphicons_394_dribbble.png" alt=""/></a></li>
		   		</ul>
		   		
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

		   		</p>
		   		
		   		<div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!--
	==================================================
	=====	PORTFOLIO
	=====	this is the portfolio block
	================================================== -->
	
	<div class="widget portfolio graphics homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio SLIDER -->
			<div class="widget-slider">
				<div class="flexslider" style="height:229px">
					<ul class="slides">
			    		<li>
			    			<div class="entry-image">
			    				<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/oreo-ios-icon_1x-19.51.14.jpg" class="fancybox">
			    					<span class="entry-image-overlay"></span>
			    					<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/oreo-ios-icon_1x-19.51.14.jpg" alt="" />
			    				</a>
			    			</div>
						</li>
						
			   			 <li>
			     			 <div class="entry-image">
			     			 	<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/journal-ios-icon.jpg" class="fancybox">
			     			 		<span class="entry-image-overlay"></span>
			     			 		<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/journal-ios-icon.jpg" alt="" />
			     			 	</a>
			     			 </div>
			   			 </li>
			    		
			    		<li>
				     		 <div class="entry-image">
				     		 	<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/expresso.png" class="fancybox">
				     		 		<span class="entry-image-overlay"></span>
				     		 		<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/expresso.png" alt="" />
				     		 	</a>
				     		 </div>
			    		</li>
					</ul>
				</div>
			</div>
	   		 
			<div class="entry drop-shadow curved">
				<!-- Portfolio Heading -->
				<h5 class="heading">
					<a href="portfolio-single.html">	
						ROMAN JUSDADO
					</a>
				</h5>
				
				<!-- Portfolio Description -->
				<p>This is some super duper awesome work by the talented Roman Jusdado.</p>
   		 	
		   		<div class="stripes"></div>
	   		</div>
	 	</div>
	</div>
	
	<div class="widget portfolio illustration homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio SLIDER -->
			<div class="widget-slider">
				<div class="flexslider" style="height:229px">
					<ul class="slides">
			    		<li>
			    			<div class="entry-image">
			    				<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/journal-ios-icon1.jpg" class="fancybox">
			    					<span class="entry-image-overlay"></span>
			    					<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/journal-ios-icon1.jpg" alt="" />
			    				</a>
			    			</div>
						</li>
						
			   			 <li>
			     			 <div class="entry-image">
			     			 	<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/oreo-ios-icon_1x-19.51.14.jpg" class="fancybox">
			     			 		<span class="entry-image-overlay"></span>
			     			 		<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/oreo-ios-icon_1x-19.51.14.jpg" alt="" />
			     			 	</a>
			     			 </div>
			   			 </li>
			    		
					</ul>
				</div>
			</div>
	   		 
			<div class="entry drop-shadow curved ">
				<!-- Portfolio Heading -->
				<h5 class="heading">
					<a href="portfolio-single.html">
						ROMAN JUSDADO
					</a>
				</h5>
				
				<!-- Portfolio Description -->
	   		 	<p>This is some super duper awesome work by the talented Roman Jusdado.</p>	
	   		 	
		   		<div class="stripes"></div>
	   		</div>
	 	</div>
	</div>
	
		    
	<!-- ================================================== -->
	    
	<div class="widget portfolio web homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/geek_bbb.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/geek_bbb.jpg" alt="" />
				</a>
		   	</div>
		   	
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				HELDER OLIVEIRA
		   			</a>
		   		</h5>
		   		
		   		<div class="entry-footer">
	   				<ul>
	   					<li class="left">Graphics</li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
		   		</div>
		   		 	
		   		<div class="stripes"></div>
			</div>			
		</div>
	</div>
		    
	<!-- ================================================== -->
	    
	<div class="widget portfolio web homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/geek_bbb.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/fashionist_bbb.jpg" alt="" />
				</a>
		   	</div>
		   	
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				HELDER OLIVEIRA
		   			</a>
		   		</h5>
		   		
		   		<ul class="social">
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Dribbble"><img src="img/social-icons/glyphicons_394_dribbble.png" alt=""/></a></li>
		   		</ul>
		   		
		   		<!-- Portfolio Description -->
		   		<p>This is some super duper awesome work by the talented Helder Oliveira. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		
	   			<div class="entry-footer">
	   				<ul>
	   					<li class="left">Graphics</li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
	   			</div>
		   		
		   		<div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget portfolio graphics homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/book_1x.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/book_1x.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">		   				
		   				SANADAS YOUNG
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>This is some super duper awesome work by the talented Sanadas Young.</p>
				
				<div class="entry-footer">
					<ul>
						<li class="left">Graphics</li>
						<li class="right no-margin"><div class="icon like"></div> 3</li>
			
					</ul>
				</div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	    
	<!-- ================================================== -->
	    
	<div class="widget portfolio illustrations homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/ssg_geothermal_1x.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/ssg_geothermal_1x.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				SOONGYU GWON
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>This is some super duper awesome work by the talented Soongyu Gwon.</p>
		   		 	
		   		 	
				<div class="entry-footer">
					<ul>
						<li class="left">Graphics</li>
						<li class="right no-margin"><div class="icon like"></div> 3</li>
			
					</ul>
				</div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	    
	<!-- ================================================== -->
	    
	<div class="widget portfolio web homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/pride.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/pride.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
				<h5 class="heading">
					<a href="portfolio-single.html">
						RYAN WELCH
					</a>
				</h5>
				
				<ul class="social">
					 <li class="social-button-team right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
				</ul>
				
				<!-- Portfolio Description -->
				<p>This is some super duper awesome work by the talented Ryan Welch. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				
				<div class="entry-footer">
					<ul>
						<li class="left">Graphics</li>
						<li class="right no-margin"><div class="icon like"></div> 3</li>
			
					</ul>
				</div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	    
	    
	<!-- ================================================== -->    
	    
	<div class="widget portfolio graphics homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/hyenas_1x.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/hyenas_1x.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				MATT WILLCOX
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>This is some super duper awesome work by the talented Matt Willcox.</p>
		   		
	   			<div class="entry-footer">
	   				<ul>
	   					<li class="left">Graphics</li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
	   			</div>
		   			
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	    
	<div class="widget portfolio illustration homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/beetle_dribbble.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/beetle_dribbble.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				ARTEM
		   			</a>
		   		</h5>
		   		
		   		<ul class="social">
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
		   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Dribbble"><img src="img/social-icons/glyphicons_394_dribbble.png" alt=""/></a></li>
		   		</ul>
		   		
		   		<!-- Portfolio Description -->
		   		<p>This is some super duper awesome work by the talented Artem.</p>
		   		
	   			<div class="entry-footer">
	   				<ul>
	   					<li class="left">Graphics</li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
	   			</div>

		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	   <?php $renamed_host=str_replace("/index.php","",url());?>
	<?php foreach($items as $item) { ?> 
	<div class="widget portfolio illustration homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="<?php echo $renamed_host.$item->image;?>" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="<?php echo $renamed_host.$item->image;?>" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				<?php echo $item->name; ?>
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p><?php echo $item->description;?></p>
		   		
	   			<div class="entry-footer">
	   				<ul>
	   					<li class="left">Graphics</li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
	   			</div>
		   			 	
		   		<div class="stripes"></div>
			</div>			
		</div>
	</div>
	<?php } ?>
	<!-- ================================================== -->
	    
	<div class="widget portfolio illustration homepage">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/geek_bbb.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/geek_bbb.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				HELDER OLIVEIRA
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>This is some super duper awesome work by the talented Helder Oliveira.</p>
		   		
	   			<div class="entry-footer">
	   				<ul>
	   					<li class="left">Graphics</li>
	   					<li class="right no-margin"><div class="icon like"></div> 3</li>
	   		
	   				</ul>
	   			</div>		   		
		   		 	
		   		<div class="stripes"></div>
			</div>			
		</div>
	</div>

	
	<!--
	==================================================
	=====	BLOG
	=====	These are the blog blocks
	================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span8">
		
			<div class="featured-stamp">
				<p>FEATURED</p>
			</div>
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/roman-jusdado-telly-detailed.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/roman-jusdado-telly-detailed.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="blog-single.html">
		   				Roman Jusdado
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		   		</p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->	
	
	<div class="widget blog">
		<div class="entry-container span4">

		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		   		 </p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/hyenas_1x.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/hyenas_1x.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
		   		magna aliqua.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
		   		ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		   		 </p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/oreo-ios-icon_1x-19.51.14.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="http://www.yinkle.com/demos/supergrid/wp-content/uploads/2013/02/oreo-ios-icon_1x-19.51.14.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/goodtimes_branding_1x.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/goodtimes_branding_1x.jpg" alt="" />
				</a>
			</div>
		   		 
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		   		 </p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span4">
		
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
		   		magna aliqua.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
		   		dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		   		 </p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span4">
		
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
		   		magna aliqua.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
		   		dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, 
		   		consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, 
		   		consectetur adipisicing elit.
		   		 </p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>	
	
	<!-- ================================================== -->
	
	<div class="widget blog">
		<div class="entry-container span4">
		
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="oswald heading">
		   			<a href="blog-single.html">
		   				BLOG TITLE
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		   		 </p>
		   		 
		   		 <div class="entry-footer">
		   		 	<ul>
		   		 		<li class="left"> 5 min ago</li>
		   		 		<li class="right no-margin"><div class="icon comment"></div> 3</li>
		   		 		<li class="right"><div class="icon like"></div> 3</li>
		   		 	</ul>
		   		 </div>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>	
	
		
	<!--
	==================================================
	=====	GRID WIDGET // TEXT
	=====	this is the text widget
	================================================== -->
	
	<div class="widget media grid-widget">
		<div class="entry-container span8">
			<div class="entry drop-shadow curved ">
			
				<!-- Heading -->
				<h2>create a widget for absolutely anything.<br>the possibilities are endless.</h2>
				
				<!-- Description -->
	   		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	   		 		
		   		 <div class="stripes"></div>
	   		</div>
	 	</div>
	</div>
	
	<!--
	==================================================
	=====	GRID WIDGET // TABS
	=====	This is the tabs widget
	================================================== -->
	
	<div class="widget tabs grid-widget">
		<div class="entry-container span8">
		
			<!-- Tab Buttons -->
			<ul class="tabs" id="myTab2">
				<li class="active drop-shadow curved-small"><a href="#home">Home</a></li><li><a href="#profile">Profile</a></li><li><a href="#messages">Messages</a></li>
			</ul>
			 
			<!-- Tab Content -->
			<div class="drop-shadow curved">
				<div class="tab-content">
				
					<!-- Tab Content (Home) -->
					<div class="tab-pane active" id="home-2">
						<div class="row-fluid">
							<div class="span12">
								<h3>Super Awesome Tabs</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
							</div>
						</div>
					</div>
				
					<!-- Tab Content (Profile) -->
					<div class="tab-pane" id="profile-2">
						<div class="row-fluid">
							<div class="span12">
								
								<h3>Super Easy to Edit</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
							</div>
						</div>	
					</div>
				
					<!-- Tab Content (Messages) -->
					<div class="tab-pane" id="messages-2">
						<div class="row-fluid">
							<div class="span12">
								<h3>Super Clean</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<!--
	==================================================
	=====	GRID WIDGET // SMALL SLIDER
	=====	this is the small slider widget
	================================================== -->
	
	<div class="widget slider grid-widget">
		<div class="entry-container span4">
		
			<!-- Image SLIDER -->
			<div class="widget-slider">
				<div class="flexslider" style="height: 229px">
					<ul class="slides">
						<li>
							<div class="entry-image">
								<a href="images/heart_cloth1.jpg" class="fancybox">
									<span class="entry-image-overlay"></span>
									<img src="images/playmakers_zidane.jpg" alt="" />
								</a>
							</div>
						</li>
						
							 <li>
								 <div class="entry-image">
								 	<a href="images/heart_cloth1.jpg" class="fancybox">
								 		<span class="entry-image-overlay"></span>
								 		<img src="images/playmakers_platini.jpg" alt="" />
								 	</a>
								 </div>
							 </li>
						
						<li>
					 		 <div class="entry-image">
					 		 	<a href="images/heart_cloth1.jpg" class="fancybox">
					 		 		<span class="entry-image-overlay"></span>
					 		 		<img src="images/playmakers_ronal.jpg" alt="" />
					 		 	</a>
					 		 </div>
						</li>
					</ul>
				</div>
			</div>
				   		 
			<div class="entry drop-shadow curved ">
			
				<!-- Heading -->
				<h5 class="heading">Small widget slider</h5>
				
				<!-- Description -->
	   		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	   		 		
		   		 <div class="stripes"></div>
	   		</div>
	 	</div>
	</div>
	
	<!--
	==================================================
	=====	GRID WIDGET // VIMEO PLAYER
	=====	this is the vimeo widget
	================================================== -->
	
	<div class="widget media grid-widget">
		<div class="entry-container span4">
		
			<!-- Video Player -->
			<div class="entry-video">
				<iframe src="http://player.vimeo.com/video/50522981?title=0&amp;byline=0&amp;portrait=0" style="height:100%; width:100%"></iframe>
			</div>
	   		 
			<div class="entry drop-shadow curved ">
			
				<!-- Heading -->
				<h5 class="heading">Video Widget</h5>
				
				<!-- Description -->
	   		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	   		 		
		   		 <div class="stripes"></div>
	   		</div>
	 	</div>
	</div>
		
	<!--
	==================================================
	=====	GRID WIDGET // PLAIN TEXT
	=====	this is the plain text widget
	================================================== -->
	
	<div class="widget plain-text grid-widget">
		<div class="entry-container span4">
	   		 
			<div class="entry drop-shadow curved ">
			
				<!-- Heading -->
				<h5 class="heading">Plain text widget</h5>
				
				<!-- Description -->
	   		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	   		 	
	   		 	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
	   		 		
		   		 <div class="stripes"></div>
	   		</div>
	 	</div>
	</div>
	
	<!--
	==================================================
	=====	GRID WIDGET // PORTFOLIO
	=====	this is the portfolio widget
	================================================== -->
	
	<div class="widget portfolio-widget grid-widget">
		<div class="entry-container span4">
		
			<!-- Portfolio Image -->
			<div class="entry-image">
				<a href="images/heart_cloth1.jpg" class="fancybox">
					<span class="entry-image-overlay"></span>
					<img src="images/goodtimes_branding_1x.jpg" alt="" />
				</a>
			</div>
		
		   	<div class="entry drop-shadow curved ">
		   	
		   		<!-- Portfolio Heading -->
		   		<h5 class="heading">
		   			<a href="portfolio-single.html">
		   				Portfolio Widget
		   			</a>
		   		</h5>
		   		
		   		<!-- Portfolio Description -->
		   		<p>
		   		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
		   		magna aliqua..
		   		 </p>
		   		 	
		   		 <div class="stripes"></div>
			</div>			
		</div>
	</div>	
	
	<!--
	==================================================
	=====	ELEMENT // TYPOGRAPHY
	=====	this is a typography block
	================================================== -->
	
	<div class="widget typography shortcodes">
		<div class="entry-container span8">
			<div class="entry drop-shadow curved six-col">
		
				<div class="full-width">
					<h3>full width</h3>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					
					</p>
				</div>
				
				<div class="row-fluid">
					<div class="span6">
						<h3>one half</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing.
						
						</p>
					</div>
					
					<div class="span6">		
						<h3>one half</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur.
						
						</p>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span4">
						<h3>one third</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
						
						</p>
					</div>
					
					<div class="span4">
						<h3>one third</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
						
						</p>
					</div>
					
					<div class="span4">	
						<h3>one third</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
						
						</p>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span3">
						<h3>one fourth</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
						
						</p>
					</div>
					
					<div class="span3">	
						<h3>one fourth</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
						</p>
					</div>
					
					<div class="span3">		
						<h3>one fourth</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
						
						</p>
					</div>
					
					<div class="span3">
						<h3>one fourth</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
						
						</p>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span3">
						<h3>one fourth</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. 
						
						</p>
					</div>
					
					<div class="span9">
						<h3>three fourth</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.
						
						</p>
					</div>
				</div>
				
			
				<div class="stripes"></div>
			</div>
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget typography shortcodes">
		<div class="entry-container span8"> 
			<div class="entry drop-shadow curved ">
				
				<h2>I'm not just beautiful. <br>I'm also gracefully responsive. </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <blockquote>
		   		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 </blockquote>
		   		 	
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <ul>
		   		 	<li>item #1</li>
		   		 	<li>item #2</li>
		   		 	<li>item #3</li>
		   		 </ul>
		   		 	
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <div class="stripes"></div>	   		 
			</div>	
		</div>
	</div>
	
	<!-- ================================================== -->
	
	<div class="widget typography shortcodes">
		<div class="entry-container span8">
		   	<div class="entry drop-shadow curved ">
				<h1>This is a h1 title</h1>
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <h2>This is a h1 title</h2>
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <h3>This is a h1 title</h3>
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <h4>This is a h1 title</h4>
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 	
		   		 <h5>This is a h1 title</h5>
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 
		   		 <h6>This is a h1 title</h6>
		   		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   		 		
		   		 <div class="stripes"></div>
			</div>	
		</div>
	</div>
	
	
	<!--
	==================================================
	=====	ELEMENTS // BUTTONS
	=====	These are the buttons
	================================================== -->
	
	<div class="widget buttons shortcodes">
		<div class="entry-container span8">	 
			<div class="entry drop-shadow curved ">
				<div class="row-fluid">
					<div class="span6">
						<h4>Simple Buttons</h4>
						
		   		 		<a class="button dark">Button</a>
		   		 		<a class="button light">Button</a>
		   		 		<a class="button blue">Button</a>
		   		 		<a class="button teal">Button</a>
		   		 		<a class="button green">Button</a>
		   		 		<a class="button red">Button</a>
		   		 		<a class="button orange">Button</a>
		   		 		<a class="button purple">Button</a>
		   		 		</div>
		   		 		
		   		 	<div class="span6">
			   		 	<h4>Simple Rounded Buttons</h4>
			   		 		
			   		 	<a class="button-rounded dark">Button</a>
			   		 	<a class="button-rounded light">Button</a>
			   		 	<a class="button-rounded blue">Button</a>
			   		 	<a class="button-rounded teal">Button</a>
			   		 	<a class="button-rounded green">Button</a>
			   		 	<a class="button-rounded red">Button</a>
			   		 	<a class="button-rounded orange">Button</a>
			   		 	<a class="button-rounded purple">Button</a>
		   		 	</div>	 	
				</div>   		 	   		 	
				<div class="stripes"></div>
			</div>		
		</div>
	</div>
	
	<!--
	==================================================
	=====	PAGES // CONTACT
	=====	This is the contact blocks
	================================================== -->
	
	<div class="widget widget-dark page-contact">
	
		<div class="span-full">
			
			<div class="entry-container span4 right">
				<div class="entry drop-shadow curved">
					<h4 class="heading">EMAIL US</h4>
					<div class="contact-alerts">
					</div>
					<form id="contact" action="contact.php">
						<div class="row-fluid">
							<div class="span12">
								<input id="name" type="text" value="" placeholder="Name" name="name">
							</div>		
						</div>			
						
						<div class="row-fluid">
							<div class="span12">
								<input id="email" type="text" value="" placeholder="Email" name="email">
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span12">
								<textarea id="message" required="" rows="6" placeholder="Message" name="message"></textarea>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div class="submit">
									<img src="img/icon_submit.png" alt=""/>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
	
		</div>
	</div>
		
	<!--
	==================================================
	=====	PAGES // ABOUT
	=====	This is the contact blocks
	================================================== -->
	
	<div class="widget tabs page-about">
		<div class="entry-container span8">
			<div class="about-header">
				<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> </blockquote>
			</div>
			<div class="page-container">
				<h2>ABOUT</h2>				
				<div class="row-fluid">
					<div class="span6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
					
					<div class="span6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				
				<div class="stripes-divider"></div>
				
				<div class="dark-tabs">
					<!-- Tab Buttons -->
					<ul class="tabs" id="about">
						<li class="active drop-shadow curved-small"><a href="#what">What</a></li><li><a href="#where">Where</a></li><li><a href="#how">How</a></li>
					</ul>
					 
					<!-- Tab Content -->
					<div class="drop-shadow curved">
						<div class="tab-content">
						
							<!-- Tab Content (Home) -->
							<div class="tab-pane active" id="what">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						
							<!-- Tab Content (Profile) -->
							<div class="tab-pane" id="where">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						
							<!-- Tab Content (Messages) -->
							<div class="tab-pane" id="how">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<!--
	==================================================
	=====	PAGES // THE TEAM
	=====	This is the contact blocks
	================================================== -->
		
	<div class="widget page-team">
		<div class="entry-container span4">
			<div class="entry-container">
			
				<!-- Portfolio Image -->
				<div class="entry-image">
					<a href="images/team.jpg" class="fancybox">
						<span class="entry-image-overlay"></span>
						<img src="images/team.jpg" alt="" />
					</a>
				</div>
			   		 
			   	<div class="entry drop-shadow curved ">
			   	
			   		<!-- Portfolio Heading -->
			   		<h5 class="heading">
			   			<a>
			   				John Doe
			   			</a>
			   		</h5>
			   		
			   		<ul class="social">
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Google+"><img src="img/social-icons/glyphicons_382_google_plus.png" alt=""/></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
			   		</ul>
			   	
			   		<!-- Portfolio Description -->
			   		<p>Junior Designer</p>
			   		 	
			   		 <div class="stripes"></div>
				</div>			
			</div>
		</div>
	</div>
	
	<div class="widget page-team">
		<div class="entry-container span4">
			<div class="entry-container">
			
				<!-- Portfolio Image -->
				<div class="entry-image">
					<a href="images/team.jpg" class="fancybox">
						<span class="entry-image-overlay"></span>
						<img src="images/team.jpg" alt="" />
					</a>
				</div>
			   		 
			   	<div class="entry drop-shadow curved ">
			   	
			   		<!-- Portfolio Heading -->
			   		<h5 class="heading">
			   			<a>
			   				John Doe
			   			</a>
			   		</h5>
			   		
			   		<ul class="social">
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Google+"><img src="img/social-icons/glyphicons_382_google_plus.png" alt=""/></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
			   		</ul>
			   	
			   		<!-- Portfolio Description -->
			   		<p>Junior Designer</p>
			   		 	
			   		 <div class="stripes"></div>
				</div>			
			</div>
		</div>
	</div>
	
	<div class="widget page-team">
		<div class="entry-container span4">
			<div class="entry-container">
			
				<!-- Portfolio Image -->
				<div class="entry-image">
					<a href="images/team.jpg" class="fancybox">
						<span class="entry-image-overlay"></span>
						<img src="images/team.jpg" alt="" />
					</a>
				</div>
			   		 
			   	<div class="entry drop-shadow curved ">
			   	
			   		<!-- Portfolio Heading -->
			   		<h5 class="heading">
			   			<a>
			   				John Doe
			   			</a>
			   		</h5>
			   		
			   		<ul class="social">
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Google+"><img src="img/social-icons/glyphicons_382_google_plus.png" alt=""/></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
			   		</ul>
			   	
			   		<!-- Portfolio Description -->
			   		<p>Junior Designer</p>
			   		 	
			   		 <div class="stripes"></div>
				</div>			
			</div>
		</div>
	</div>
	
	<div class="widget page-team">
		<div class="entry-container span4">
			<div class="entry-container">
			
				<!-- Portfolio Image -->
				<div class="entry-image">
					<a href="images/team.jpg" class="fancybox">
						<span class="entry-image-overlay"></span>
						<img src="images/team.jpg" alt="" />
					</a>
				</div>
			   		 
			   	<div class="entry drop-shadow curved ">
			   	
			   		<!-- Portfolio Heading -->
			   		<h5 class="heading">
			   			<a>
			   				John Doe
			   			</a>
			   		</h5>
			   		
			   		<ul class="social">
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Google+"><img src="img/social-icons/glyphicons_382_google_plus.png" alt=""/></a></li>
			   			 <li class="social-button-team right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
			   		</ul>
			   	
			   		<!-- Portfolio Description -->
			   		<p>Junior Designer</p>
			   		 	
			   		 <div class="stripes"></div>
				</div>			
			</div>
		</div>
	</div>
	
		
	<!--
	==================================================
	=====	ELEMENTS // ALERTS
	=====	this is the alert block
	================================================== -->
	
	<div class="widget alerts shortcodes">
		<div class="entry-container span8">
			   		 
			<div class="entry drop-shadow curved ">
				<div class="alert alert-error">
					<strong>Uh Oh!</strong>
					Change a few things up and try submitting again.
				</div>	
				
				<div class="alert alert-success">
					<strong>Well done!</strong>
					You successfully read this important alert message.
				</div>	
				
				<div class="alert alert-info">
					<strong>Heads up!</strong>
					This alert needs your attention, but it's not super important.
				</div>
				
		   		 <div class="stripes"></div>
	   		</div>
	   		
	 	</div>
	</div>
	
	
	<!--
	==================================================
	=====	ELEMENTS // PROGRESS BAR
	=====	this is the progress bar block
	================================================== -->
	
	<div class="widget progress-bar shortcodes">
		<div class="entry-container span8">
			   		 
			<div class="entry drop-shadow curved ">
				<div class="progress progress-info">
					<div class="bar" style="width: 20%"></div>
				</div>
				
				<div class="progress progress-success">
					<div class="bar" style="width: 40%"></div>
				</div>
				
				<div class="progress progress-warning">
					<div class="bar" style="width: 60%"></div>
				</div>
				
				<div class="progress progress-danger">
					<div class="bar" style="width: 80%"></div>
				</div>
				
		   		 <div class="stripes"></div>
	   		</div>
	   		
	 	</div>
	</div>
		           
</div> <!-- #container -->


<!-- Load more pagination
================================================== -->
<!-- When this link is clicked, the blog will load this content dynamically -->

<nav id="page_nav">
   <a href="index2.html"></a>
</nav>

<!-- Footer
================================================== -->
<!-- Copyright & Social Buttons -->
 
 <div class="footer">
 	<ul>
		
	
		<li class="social-button right"><a rel="alternate" data-original-title="Facebook"><img src="img/social-icons/glyphicons_410_facebook.png" alt="" /></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Google+"><img src="img/social-icons/glyphicons_382_google_plus.png" alt=""/></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Twitter"><img src="img/social-icons/glyphicons_411_twitter.png" alt=""/></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Vimeo"><img src="img/social-icons/glyphicons_414_vimeo.png" alt="" /></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="LinkedIn"><img src="img/social-icons/glyphicons_397_linked_in.png" alt="" /></a></li>
		<li class="social-button right"><a rel="alternate" data-original-title="Dribble"><img src="img/social-icons/glyphicons_394_dribbble.png" alt="" /></a></li>

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
 
 <!-- CONTACT FORM
 ================================================== -->
 <!-- AJAX contact form -->
  
 <script>
 	$('.submit').click(function() {
 		
 		var name = $("#name").val();
 		var email = $("#email").val();
 		var message = $("#message").val();
 		
 		var dataString = 'name='+ name + '&email=' + email + '&message=' + message;  
 		//alert (dataString);return false;  
 		$.ajax({  
 		  type: "POST",  
 		  url: "contact.php",  
 		  data: dataString,  
 		  success:  function (html) { 
 		  	if (html == "invalid_email ") {
 		  		$('.contact-alerts').empty();
 		  		$('.contact-alerts').append('<div id="email-error" class="alert alert-error">This email is invalid!</div>');
 		  	} else if (html == "success ") {
 		 		$('.contact-alerts').empty();
 				$('.contact-alerts').append('<div id="email-success" class="alert alert-success">Your email has been sent!</div>');
 		  	} else if (html == "error ") {
 		  		$('.contact-alerts').empty();
 		  		$('.contact-alerts').append('<div id="email-error" class="alert alert-error">Please fill out all the fields!</div>');
 		  	}
 
 		  }  
 		});  
 	});
 </script>
 
 <!-- JQUERY (load more)
 ================================================== -->
 <!-- Make sure Load more only works for blog -->
 
 <script>
 if(document.location.toString().indexOf('#filter=.blog')!=-1){
 
 	$("#page_nav").css("display","block");
 	
 } else {
 
 	$("#page_nav").css("display","none");
 
 }
 </script>
 
<!-- JQUERY (tabs)
================================================== -->
<!-- Script for the awesome tabs -->

<script>
$('#myTab a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
})

$('#myTab2 a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
})

$('#about a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
})
</script>

<!-- JQUERY (flexslider)
================================================== -->
<!-- Script for the awesome slider -->

<script type="text/javascript">
  $(function() {
    $('.full-slider .flexslider').flexslider({
    	animation: "slide",
    	directionNav: true, 
    
    });
    
    $('.widget-slider .flexslider').flexslider({
    	animation: "slide",
    	directionNav: false, 
    	slideshow: false
    
    });
    
  });
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

<!-- JQUERY (fancy)
================================================== -->
<!-- Script for the awesome fancybox -->

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

<!-- JQUERY (isotope)
================================================== -->
<!-- Script for the super awesome grid (Thanks, David DeSandro) -->

<script src="js/jquery.isotope_custom.js"></script> 



<script type="text/javascript">
  var GoSquared = {};
  GoSquared.acct = "GSN-959941-K";
  (function(w){
    function gs(){
      w._gstc_lt = +new Date;
      var d = document, g = d.createElement("script");
      g.type = "text/javascript";
      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(g, s);
    }
    w.addEventListener ?
      w.addEventListener("load", gs, false) :
      w.attachEvent("onload", gs);
  })(window);
</script>


    
  </body>
</html>
