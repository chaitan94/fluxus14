<html>
<head>
	<title>Fluxus 2014</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<meta name="description" content="Official site for IIT Indore's annual cultural and technical festival">
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<?php
$loaded = 0;
if(isset($_POST['loaded'])){
	$loaded = $_POST['loaded'];
	unset($_POST);
}
echo '<script>var loaded='.$loaded.'</script>';
if(!$loaded){
?>
	<div id="jpreContent" class="fixwrap">
		<div style="position:absolute;top:27%;width:100%;">
		<div style="position:relative;width:27%;margin:0 auto;">
		</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jpreloader.min.js"></script>
	<script type="text/javascript">
	   $(document).ready(function() {
	      $('body').jpreLoader({loaderVPos: '50%'});
	      $("#jpreLoader")[0].style.left = '45%';
	   });
	</script>
	<div id="preloader" class="fixwrap">
		<canvas id="confetti"></canvas>
		<img id="gate" src="img/gateclosed.png" style="position:fixed;bottom:0;width:100%;">
		<img id="gate" src="img/loadingtitle.png" style="position:fixed;bottom:0;width:100%;">
		<div id="loading">ENTER</div>
	</div>
<?php } ?>
	<div id="main" class="abswrap">
	<?php if($loaded) echo '<canvas id="confetti"></canvas>';?>
		<div id="navbar" class="fixwrap" style="">
			<center>
				<ul>
					<a class="active" href="home.html"><li data-name="home">Home</li></a>
					<a href="/about_us.html"><li data-name="about">About Us</li></a>
					<a href="/events.html#proshows"><li data-name="proshows">Pro-Shows</li></a>
					<a href="/events.html#tech"><li data-name="tech">Tech Theatre</li></a>
					<a href="/events.html#cult"><li data-name="cult">Performing Arts</li></a>
					<a href="/events.html#games"><li data-name="games">Gamerz Den</li></a>
					<a href="/events.html#workshop"><li data-name="workshop">Workshops</li></a>
					<a href="/social.html"><li data-name="social">Social Cause</li></a>
					<a href="/hospitality"><li data-name="games">Hospitality</li></a>
					<a href="/sponsors.html"><li data-name="sponsors">Sponsors</li></a>
					<a href="/home.html"><li data-name="home" class="nav-right"><img height="25" src="/img/logo.png"></li></a>
					<a href="/contact_us.html"><li data-name="team" class="nav-right">Contact Us</li></a>
					<a href="/register.html"><li data-name="register" class="nav-right">Register</li></a>
				</ul>
			</center>
		</div>
		<div class="tent tent-l">
			<!-- <div><a href="events.html#games"><img height="60" src="img/games/game.png"><div>Gamerz Den</div></a></div> -->
			<div><a href="/events.html#proshows/popularnite"><div><img src="/img/events/proshows/popularnite.jpg" style="width:220px;"></div><div>ADITI SINGH SHARMA</div><div>Live, 9th Feb</div></a></div>
			<div><a href="/events.html#proshows/fusionnite"><div><img src="/img/events/proshows/fusionnite.jpg" style="width:220px;"></div><div>ADVAITA</div><div>Live, 8th Feb</div></a></div>
		</div>
		<div class="tent tent-r">
			<div style="border-radius:2px;padding:2px;background:rgba(0,0,0,0.3);"><a href="/data/Schedule_Fluxus14.pdf"><div>Schedule</div><div>now here!</div></a></div>
			<div style="border-radius:2px;padding:2px;background:rgba(0,0,0,0.3);"><a href="/dlinkquiz"><div>D-Link GK Quiz</div><div></div></a></div>
		</div>
		<div id="sidebar">
            <div id="sidebarmenu">
             <b>U<br>P<br>D<br>A<br>T<br>E<br>S</b>
            </div>
            <div id="sidebaritems">
            <ul>
			  <a href="/data/Schedule_Fluxus14.pdf" download><li>Fluxus Schedule is here!</li></a>
			  <a href="/events.html#tech/aadc" target="_blank"><li>AADC results declared</li></a>
              <a href="/events.html#literary/wordwars" target="_blank"><li>Registrations for WordWars extended to 5th Feb</li></a>
              <a href="/engendea" target="_blank"><li>Deadline for Submission for Engendea 1.0 extended to 5th Feb</li></a>
              <a href="/data/fluxus_bhopal_ambassadors.pdf" target="_blank"><li>List of all the Bhopal college ambassadors</li></a>
              <a href="/data/fluxus_indore_ambassadors.pdf" target="_blank"><li>List of all the Indore college ambassadors</li></a>
              <a href="/data/fluxus_mp_ambassadors.pdf" target="_blank"><li>List of all the MP college ambassadors</li></a>
              <a href="/data/fluxus_omp_ambassadors.pdf" target="_blank"><li>List of all the non-MP college ambassadors</li></a>
            </ul>
            </div>
        </div>
		<div id="content">
			<div id="home" class="abswrap">
				<div style="position:relative;top:25%;width:26%;margin:0 auto;">
					<img style="width:40%;display: block;margin-left: auto;margin-right: auto;" src="img/dates.png"></img>
					<img id="redmask" style="width:70%; margin-top:5px;display: block;margin-left: auto;margin-right: auto;" src="img/ultimatum.png"></img>
				</div>
				<div class="homefoot">
					<div class="left side">
						<div style="margin-top:-1%;margin-left:-10%;color:white;font-family:'Mouse Memoirs'">
							<!-- <span style="color:rgb(210,106,0);">Buy Merchandise</span><br> -->
							<span style="color:#DDD;text-decoration:none;">Get the Fluxus'14 App:</span><br>
							<span><a href="https://play.google.com/store/apps/details?id=com.IITI.fluxus14" target="_blank" style="color:#ff6600;text-decoration:none;">Android</a> | <a href="http://www.windowsphone.com/en-us/store/app/fluxus-2014/071acb86-75f9-4e6b-8f2a-05ad960ed13f" target="_blank" style="color:#ff6600;text-decoration:none;">Windows</a></span><br>
							<a id="hyper" style="text-decoration:none;color:#DDD;" href="http://facebook.com/fluxus.iiti" target="_blank"><span style="margin-top:10px;">Connnect with Us</span></a>
							<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ffluxus.iiti&amp;height=21&amp;colorscheme=dark&amp;layout=button_count&amp;show_faces=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden;padding-left:20px;width:102px;height:21px;" allowTransparency="true"></iframe>
						</div>
					</div>
					<div class="middle">
						<div>
							<div class="middiv" style="line-spacing:4px;">
								<a id="hyper" style="text-decoration:none;" href="events.html#quiz/intro">Quiz Fest</a>
							</div>
							<div class="middiv" style="line-spacing:4px;">
								<a id="hyper" style="text-decoration:none;" href="online.html">Online Events</a>
							</div>
							<div class="middiv" style="font:170% Carnevalee;">
								<a id="hyper" style="text-decoration:none;color:#ff6600;font-size:115%;" href="register.html">Register</a>
							</div>
							<div class="middiv" style="line-spacing:4px;">
		                        <a style="text-decoration:none;margin-left:6px;" href="/engendea/">Engendea 1.0</a>
		                    </div>
							<div class="middiv" style="line-spacing:4px;">
								<a id="hyper" style="text-decoration:none;" href="events.html#literary/pottermania">Literary Fest</a>
							</div>
						</div>
						<div class="caption">Central India's Largest Techno-Cultural College Festival</div>
					</div>
					<div class="right side" style="padding-top:3%;">
						<span style=""><a href="best_love_story.html" style="text-decoration:none;">Best Love Story Competition</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/index.js"></script>
<script>
//DO NOT TOUCH!!!
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43688607-1', 'fluxus.in');
  ga('send', 'pageview');

</script>
</body>
</html>
