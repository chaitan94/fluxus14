<?php
if(isset($_POST['fluxusid'])&&isset($_POST['eventid'])){
	$fluxusid = $_POST['fluxusid'];
	$eventid = $_POST['eventid'];
	$events = array("danceprix","dramatics","kreatrix","painting","shutterbug","treasureraider","voiceoffluxus",
		"aadc","aquarobotics","bhejafry","cidcalculator","dividebyzero","enigma","eyebotsoccer","licensetokill","monsterwheels","roboone","struttura","tailspin",
		"popularnite","performancenite","elegentia","stuntmania",
		"arduinobotics","armmicro","autospark","ethicalhacking","mobilehacking","automotive","aadcws",
		"engendea");
	if(in_array($eventid,$events)){
		include '../connect.inc.php';
		$db = mysqli_connect($MySQLhost,$MySQLuser,$MySQLpass,$MySQLdbname);

		$pquery = $db->prepare("SELECT id FROM users WHERE fluxusid=?");
		$pquery->bind_param("s",$fluxusid);
		$pquery->execute();
		$pquery->store_result();
		if($pquery->num_rows){
			$pquery = $db->prepare("SELECT id FROM eventreg WHERE fluxusid=? AND eventid=?");
			$pquery->bind_param("ss",$fluxusid,$eventid);
			$pquery->execute();
			$pquery->store_result();
			if(!$pquery->num_rows){
				$query = $db->prepare("INSERT INTO eventreg(fluxusid, eventid) VALUES (?, ?)");
				$query->bind_param("ss",$fluxusid,$eventid);
				$query->execute();
				echo "Registration successful.";
			} else echo "Already registered!";
		} else echo "Invalid Fluxus ID. Make sure you have registered for fluxus first.";
	}else echo "Not a valid eventid.";
}
?>