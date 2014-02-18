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
	<div id="header_image" style="margin-left:0px;margin-top:-5px;"><img src="images/banner.png" /></div>
		<div class="container" style="">
			<div id="" style="width:auto; height:80px; background-color:green; margin-top:-140px;">
				<nav class="cl-effect-2">
					<a href="index.php"><span style="" data-hover="Home">Home</span></a>
					<a class="active" href="event_info.php"><span style="" data-hover="Event Info">Event Info</span></a>
					<a href="gallery.php"><span style="" data-hover="Gallery">Gallery</span></a>
					<a href="register.php"><span style="" data-hover="Register">Register</span></a>
					<a href="sponsors.php"><span style="" data-hover="Sponsors">Sponsors</span></a>
					<a href="contact_us.php"><span style="" data-hover="Contact Us">Contact Us</span></a>
				</nav>
			</div>
			
			
			<div id="timer" style="margin-left:350px;margin-top:-200px;">
							
			</div>
					
			<div id="main_content" style="margin-left:0px;margin-top:250px;background-color:;height:1100px;;"> 
				<div id="event_info" style="margin-left:50px;margin-top:50px;height:350px;background-color:;padding:60px;">
					<div style="font-size:1.3em;margin-top:30px;">
						<table id="details">
						<tr>
							<td style="width:250px;font-weight:bold;">Start Point</td>
							<td style="width:220px;font-weight:bold;">End Point</td>
							<td style="width:200px;font-weight:bold;">Date</td>
							<td style="width:100px;font-weight:bold;">Time</td>
						</tr>
						<tr style="">
							<td style="width:250px;padding-top:30px;">Abhay Prashl Stadium</td>
							<td style="width:220px;padding-top:30px;">IET-DAVV Campus</td>
							<td style="width:200px;padding-top:30px;">Feb 2, 2014</td>
							<td style="width:100px;padding-top:30px;">6:30 A.M. </tD>
						</tr>
						</table>
					</div>
					
					
					<div id="map" style="margin-left:30px;margin-top:70px;height:500px; width:80%;">
						Boys Map<br><br>
						<div style="">
							
							<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Unknown+road&amp;daddr=22.7235557,75.8871108+to:22.7035782,75.8734079+to:iet&amp;hl=en&amp;geocode=FdjCWgEdUc-FBA%3BFeO7WgEdBvKFBCn33Ls2OP1iOTHr6vt6SGio8g%3BFdptWgEdf7yFBCmPh9u0H_1iOTGtKMI8oQCCIQ%3BFVUWWgEdHNiFBCFvz-OjJeHGPik3j6PlwPxiOTFvz-OjJeHGPg&amp;sll=22.708185,75.881367&amp;sspn=0.04814,0.084543&amp;mra=mru&amp;via=1,2&amp;ie=UTF8&amp;ll=22.696704,75.886087&amp;spn=0.04814,0.084543&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Unknown+road&amp;daddr=22.7235557,75.8871108+to:22.7035782,75.8734079+to:iet&amp;hl=en&amp;geocode=FdjCWgEdUc-FBA%3BFeO7WgEdBvKFBCn33Ls2OP1iOTHr6vt6SGio8g%3BFdptWgEdf7yFBCmPh9u0H_1iOTGtKMI8oQCCIQ%3BFVUWWgEdHNiFBCFvz-OjJeHGPik3j6PlwPxiOTFvz-OjJeHGPg&amp;sll=22.708185,75.881367&amp;sspn=0.04814,0.084543&amp;mra=mru&amp;via=1,2&amp;ie=UTF8&amp;ll=22.696704,75.886087&amp;spn=0.04814,0.084543&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
						
						<div style="margin-left:550px; margin-top:-410px;">	
							Girls Map <br><br>
							<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=abhay+prashal+stadium+indore&amp;daddr=iet&amp;hl=en&amp;geocode=Ff3IWgEd2NqFBCEWoFL1kv5qximn9wK5QP1iOTEWoFL1kv5qxg%3BFVUWWgEdHNiFBCFvz-OjJeHGPik3j6PlwPxiOTFvz-OjJeHGPg&amp;sll=22.720894,75.877682&amp;sspn=0.024068,0.042272&amp;mra=ls&amp;ie=UTF8&amp;ll=22.703925,75.876066&amp;spn=0.046235,0.01668&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=abhay+prashal+stadium+indore&amp;daddr=iet&amp;hl=en&amp;geocode=Ff3IWgEd2NqFBCEWoFL1kv5qximn9wK5QP1iOTEWoFL1kv5qxg%3BFVUWWgEdHNiFBCFvz-OjJeHGPik3j6PlwPxiOTFvz-OjJeHGPg&amp;sll=22.720894,75.877682&amp;sspn=0.024068,0.042272&amp;mra=ls&amp;ie=UTF8&amp;ll=22.703925,75.876066&amp;spn=0.046235,0.01668&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
					</div>
				</div>
				
				<div id="prizes" style="margin-left:50px;margin-top:300px;width:950px;height:300px;background-color:;padding:60px;">
					<h1>Prizes</h1><br><BR>
					Get ready to grab prizes worth 60,000 INR<br><br>
					<h3>Prizes Categories :</h3> <br><br>
					<ol style="padding-left:50px;"> 
					<li>Colleges ( Rs 6,000 for Males and Rs 6,000 for females)</li><br>
					<li> Schools </li><br>
					<li> Military Colleges + Other People ( Rs 10,000 for Males and Rs 10,000 for females)</li>
					<ol>
					
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