<?php
if(isset($_POST['fluxusid'])){
	$fluxusid = $_POST['fluxusid'];
	include '../connect.inc.php';
	$db = mysqli_connect($MySQLhost,$MySQLuser,$MySQLpass,$MySQLdbname);

	$pquery = $db->prepare("SELECT accommodation FROM users WHERE fluxusid=?;");
	$pquery->bind_param("s",$fluxusid);
	$pquery->execute();
	$res = $pquery->get_result();
	if($res->num_rows){
		$r = $res->fetch_all(MYSQLI_ASSOC);
		$previously = $r[0]['accommodation'];
		$now = 1;
		if($_POST['submit']=='Cancel'){$now = 0;}
		if($now!=$previously){
			if($now){
				$query = $db->prepare("UPDATE users SET accommodation='1' WHERE fluxusid=?");
				$query->bind_param("s",$fluxusid);
				$query->execute();
				echo "Registration successful.";
			}else{
				$query = $db->prepare("UPDATE users SET accommodation='0' WHERE fluxusid=?");
				$query->bind_param("s",$fluxusid);
				$query->execute();
				echo "Registration successfully Cancelled.";
			}
		}else{
			if($now) echo "Already registered for accommodation.";
			else echo "Already not registered for accommodation.";
		}
	}else echo "Invalid Fluxus ID!";
}else echo "Fluxus ID required.";
?>