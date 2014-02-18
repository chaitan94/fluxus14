<?php
				$end='2014-02-02 7:00:00'; //  final marathon time..
				$cur = new DateTime(date('Y-m-d H:i:s'));  // get current date and time
				
				$intervalo = date_diff(date_create(), date_create($end));  // get the difference 
				$f = $intervalo->format("%Y-%M-%d : %H:%i:%s");  // time difference...
				
				
				
				//$month_diff = $intervalo->format("%M");
				$day_diff = $intervalo->format('%a'); 
				$hour_diff = $intervalo->format("%H");
				$minute_diff = $intervalo->format("%i");
				$sec_diff = $intervalo->format("%s");
				
				/*	
				echo " Final Date    ".$end."<BR>";
				echo 'Current Date '.$cur->format('Y-m-d H:i:s')."<br>";
				echo " Difference    ".$f."<bR>";
				*/
?>
			<div class="time" style="position:absolute;width:420px;height:200px; margin-left:800px;margin-top:30px;">
				<em class="clock"></em>
				<div class="c-block c-block-2"><div class="bl-inner"><span><?php echo $day_diff?></span></div> <span class="etitle etitle-1">Days</span></div> <ins></ins>
				<div class="c-block c-block-2"><div class="bl-inner"><span><?php echo $hour_diff;?></span></div> <span class="etitle etitle-2">Hours</span></div> <ins></ins>
				<div class="c-block c-block-2"><div class="bl-inner"><span><?php echo $minute_diff;?></span></div> <span class="etitle etitle-3">Minutes</span></div> <ins></ins>
				<div class="c-block c-block-2"><div class="bl-inner"><span><?php echo $sec_diff;?></span></div> <span class="etitle etitle-4">Seconds</span></div>
			</div>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<title>Marathon 2014 , IIT INDORE</title>
		<meta name="description" content="Marathon 2014 , IIT INDORE : in January" />
		<meta name="keywords" content="marathon,iiti,iit,iit indore,indore" />
		<meta name="author" content="Kishore" />
		
		<link rel="stylesheet" type="text/css" href="css/home_nav.css" />
		<link rel="stylesheet" type="text/css" href="css/home_nav2.css" />
		
		<script src="js/modernizr.custom.js"></script>
		<script src="js/main.js"></script>
		<script src="js/jquery.js"></script>
		
		<!-- for timer -->
		
		<link rel="stylesheet" type="text/css" href="css/timer_style.css" media="all" >
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		
		<style>

		<!-- body{ background-color:#E0DFDB;} -->
		#main_content {
				-moz-box-shadow: 0 0 5px 5px #888;
-webkit-box-shadow: 0 0 5px 5px#888;
box-shadow: 0 0 5px 5px #888;
				}
		</style>
		
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		
	</head>
	<body>
	<div id="header_image" style="margin-left:0px;margin-top:-5px;"><img src="images/banner.png" /></div>
		
		<div class="container" style="">
			
			<div id="" style="width:auto; height:80px; background-color:green; margin-top:-140px;">
				<nav class="cl-effect-2">
					<a href="index.php"><span style="" data-hover="Home">Home</span></a>
					<a href="event_info.php"><span style="" data-hover="Event Info">Event Info</span></a>
					<a class="active" href="gallery.php"><span style="" data-hover="Gallery">Gallery</span></a>
					<a href="register.php"><span style="" data-hover="Register">Register</span></a>
					<a href="sponsors.php"><span style="" data-hover="Sponsors">Sponsors</span></a>
					<a href="contact_us.php"><span style="" data-hover="Contact Us">Contact Us</span></a>
				</nav>
			</div>
			
		<div id="main_content" style="margin-left:0px;margin-top:50px;height:650px;padding-top:20px;"> 		
				<div class="codrops-top clearfix" style="margin-left:0px;">
						<div class="wrapper">
							<ul id="sb-slider" class="sb-slider">
								<li>
									<img src="images/1.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 1</h3>
									</div>
								</li>
								<li>
									<img src="images/2.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 2</h3>
									</div>
								</li>
								<li>
									<img src="images/3.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 3</h3>
									</div>
								</li>
								<li>
									<img src="images/4.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 4</h3>
									</div>
								</li>
								<li>
									<img src="images/5.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 5</h3>
									</div>
								</li>
								<li>
									<img src="images/6.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 6</h3>
									</div>
								</li>
								<li>
									<img src="images/7.jpg" alt="image1"/>
									<div class="sb-description">
										<h3>Slide 7</h3>
									</div>
								</li>
							</ul><div id="shadow" class="shadow"></div>
							<div id="nav-arrows" class="nav-arrows">
								<a id="n" href="#">Next</a>
								<a id="p" href="#">Previous</a>
							</div>
						<div id="nav-dots" class="nav-dots" style="margin-left:0px;margin-top:-30px;">
								<span class="nav-dot-current"></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>

						</div><!-- /wrapper -->

				</div>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
							
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
		
			
			<div id="" style="width:auto; height:40px; background-color:green;margin-top:20px;">
				<nav class="cl-effect-16">
					<a href="index.php" data-hover="Home">Home</a>
					<a href="event_info.php" data-hover="Event Info">Event Info</a>
					<a href="gallery.php" data-hover="Gallery">Gallery</a>
					<a href="register.php" data-hover="Register">Register</a>
					<a href="contact_us.php" data-hover="Contact Us">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					IIT INDORE
					<a style="margin-left:280px;" href="http://facebook.com/kishorer747" data-hover="Designed by Kishore Rajendra"><span class="act"> Designed by Kishore Rajendra</span></a>				
				</nav>
			</div>
		</div><!-- /container -->
	</body>
</html>