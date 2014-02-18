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
		
		
		<link rel="stylesheet" type="text/css" href="css/open_default.css" />
		<link rel="stylesheet" type="text/css" href="css/open_component.css" />
		<script src="js/modernizr.custom.js"></script>
		
		
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
		a:hover{color:red;}
		</style>
		
	</head>
	<body>
	<div id="header_image" style="margin-left:0px;margin-top:-5px;"><img src="images/banner.png" /></div>
		<div id="" class="container" style="">
			<div id="" style="width:auto; height:80px; background-color:green; margin-top:-140px;">
				<nav class="cl-effect-2">
					<a class="active" href="index.php"><span style="" data-hover="Home">Home</span></a>
					<a href="event_info.php"><span style="" data-hover="Event Info">Event Info</span></a>
					<a href="gallery.php"><span style="" data-hover="Gallery">Gallery</span></a>
					<a href="register.php"><span style="" data-hover="Register">Register</span></a>
					<a href="sponsors.php"><span style="" data-hover="Sponsors">Sponsors</span></a>
					<a href="contact_us.php"><span style="" data-hover="Contact Us">Contact Us</span></a>
				</nav>
			</div>
			<!--
			<div class="os-phrases" id="os-phrases">
				<h2>Sometimes it's better</h2>
				<h2>to hide</h2>
				<h2>in order to</h2>
				<h2>survive evil.</h2>
			</div>
			-->
			<div id="main_content" style="margin-left:0px;margin-top:35px;background-color:;height:auto;padding:30px;"> 
				<div id="quote" style="position:relative;margin-left:0px;margin-top:50px;background-color:;padding:30px;">
					<br>
					<h2>"WE DON’T INHERIT THIS PLANET FROM OUR ANCESTORS, WE BORROW IT FROM OUR CHILDREN"</h1>
				</div>
				
				<div id="about" class="bor" style="position:relative; margin-left:0px;margin-top:0px;width:600px;padding:30px;">
					<h1>CITY MARATHON-2014 GO GREEN</h1><br>
					
					Long distant sprint for the most burning topic of this decade - "GO GREEN"!
					CITY MARATHON  It is a marathon run not for a few miles, not for a few hours, but for a noble cause that you really believe in solving, a cause that needs everyone’s attention.<br><br>
					
					<h2>"If you want to run, run a mile. If you want to experience a different life, run a marathon"</h2>
					
				</div>
				<div id="why" class="bor" style="margin-left:0px;margin-top:50px;width:550px;padding:50px;">
					<h1> Why Go Green??</h1>
					In may 2012, the honourable High Court of Indore issued directives to IMC for tree plantation. Ground water-level has receded below 250 feet in some parts forcing the district administration to announce a blanket ban on digging new tube wells now. This is when around 40% of the city population is still dependent on ground water for their daily needs. So, the need of hour is to provide a helping hand in protecting our MOTHER EARTH.
				</div>
				<!-- <div id="video" style="margin-left:620px;margin-top:-330px;">
					<iframe width="620" height="400" src="http://youtube.com/embed/NLWsK1ZFunA" frameborder="0" allowfullscreen></iframe>
				</div>
				-->
				<div id="details" class="bor" style="margin-left:650px;margin-top:-550px;width:550px;padding:30px;font-weight:bold;">
					From: Abhay Prashal Stadium<bR><br>
					To : IET-DAVV Campus<BR><br>
					Date : 2nd February, 2014 <br><BR>
					<a href="event_info.html"><span style="font-weight:bold;">More Info</span></a>
				</div>
				
				<div id="impact" class="bor" style="margin-left:600px;margin-top:50px;width:550px;padding:50px;">
					<h1> What is the Impact of this Marathon?</h1>
					OUR EFFORT:
					At the end of this marathon, there will be a PLANTATION DRIVE at IIT Indore’s Simrol campus where the marathon participants will plant tree saplings and take pledge to protect mother nature. It is not only our college students participating but it will be BIGGER than ever with various colleges, schools, army, corporates , NGOs and hospitals will be taking part. PRIZES will also be given for various events organized alongside.
					<h2>Lets put our best foot forward for this noble cause and make this marathon a success!!!</h2>	
				</div>
			
			</div>
			
			<div id="" style="width:auto; height:40px; background-color:green;margin-top:20px;">
				<nav class="cl-effect-16">
					<a href="index.php" data-hover="Home">Home</a>
					<a href="event_info.php" data-hover="Event Info">Event Info</a>
					<a href="gallery.php" data-hover="Gallery">Gallery</a>
					<a href="register.php" data-hover="Register">Register</a>
					<a href="contact_us.php" data-hover="Contact Us">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					IIT INDORE
					<a style="text-decoration:none;margin-left:280px;" href="http://facebook.com/kishorer747" data-hover="Designed by Kishore Rajendra"><span class="act"> Designed by Kishore Rajendra</span></a>				
				</nav>
			</div>
		</div><!-- /container -->
		<script src="js/jquery.min.js"></script>
	</body>
</html>
