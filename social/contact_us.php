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
		
	</head>
	<body>
	<div id="header_image" style="margin-left:0px;margin-top:-5px;width:100%;"><img style="width:100%;" src="mbg.jpg" /></div>
		<div class="container" style=" background-color:">
			<div id="" style="width:auto; height:80px; background-color:green; margin-top:-140px;">
				<nav class="cl-effect-2">
					<a href="index.php"><span style="" data-hover="Home">Home</span></a>
					<a href="event_info.php"><span style="" data-hover="Event Info">Event Info</span></a>
					<a href="gallery.php"><span style="" data-hover="Gallery">Gallery</span></a>
					<a href="register.php"><span style="" data-hover="Register">Register</span></a>
					<a href="sponsors.php"><span style="" data-hover="Sponsors">Sponsors</span></a>
					<a class="active" href="contact_us.php"><span style="" data-hover="Contact Us">Contact Us</span></a>
				</nav>
			</div>
			
			<div id="main_content" style="margin-left:0px;margin-top:35px;background-color:;height:auto;"> 
				
				<div id="contacts" style="margin-left:50px;margin-top:50px;width:550px;height:550px;;background-color:;padding:30px;">
					<table>
						<tr style="margin-top:30px;">
							<td>
							<h1>Overall Coordinator</h1><bR>
							Deepak Raj<br>
							+91-8109425899<br>
							deepakraj306@gmail.com<bR><br>
							</td>
						</tr>
						
						<tr style="margin-top:30px;">
							<td>
							<h1>Marketing Team</h1><bR>
							Alok Kumar<br>
							+91-8349668525<br>
							alok2365@gmail.com<bR><br>
							</td>
						</tr>
						<tr style="margin-top:30px;">
							<td>
							<h1>Publicity Team</h1><bR>
							Kishore<br>
							+91-7898754430<br>
							kishorer747@gmail.com
							</td>
						</tr>
					</table>
				</div>
				<div style="padding:30px;margin-top:-550px; margin-left:600px;height:500px;">
				<h3>Contact Us :<h3><br>
				marathoniiti@gmail.com
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
					<a style="margin-left:280px;" href="http://facebook.com/kishorer747" data-hover="Designed by Kishore Rajendra"><span class="act"> Designed by Kishore Rajendra</span></a>				
				</nav>
			</div>
		</div><!-- /container -->
	</body>
</html>