<?php
if(isset($_POST['email'])){
	$email = $_POST['email'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		include '../connect.inc.php';
		$db = mysqli_connect($MySQLhost,$MySQLuser,$MySQLpass,$MySQLdbname);

		$pquery = $db->prepare("SELECT name,fluxusid FROM users WHERE email=?");
		$pquery->bind_param("s",$email);
		$pquery->execute();
		$r = $pquery->get_result();
		$rows = $r->fetch_all(MYSQLI_ASSOC);
		if($r->num_rows){
			echo "Your Fluxus ID has been sent to your mail";
			mail($email,
				"Forgot Fluxus ID",
				"Hey ".$rows[0]['name']."!\r\n\r\nAs you have requested on our site,\r\nYour Fluxus ID is ".$rows[0]['fluxusid']."\r\nIf you did not request this/got this email by mistake please ignore.",
				"From: Fluxus 2014 <contactus@fluxus.in>\r\nReply-To: contactus@fluxus.in");
		} else echo "Email not registered. Make sure to register for fluxus at <a href='http://www.fluxus.in/register.html'>http://www.fluxus.in/register.html</a>.";
	}else echo "Invalid email.";
}
?>
