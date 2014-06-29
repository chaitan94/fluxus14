<?php
if(isset($_POST['which'])&&isset($_POST['name'])&&isset($_POST['college'])&&isset($_POST['city'])&&isset($_POST['mail'])&&isset($_POST['year'])&&isset($_POST['branch'])&&isset($_POST['contactno'])){
	include '../connect.inc.php';
	$db = mysqli_connect($MySQLhost,$MySQLuser,$MySQLpass,$MySQLdbname);
	$which = $_POST['which'];
	$name = $_POST['name'];
	$college = $_POST['college'];
	$city = $_POST['city'];
	$mail = $_POST['mail'];
	$year = $_POST['year'];
	$branch = $_POST['branch'];
	$phone = $_POST['contactno'];
	if($name&&$mail&&$college&&$city&&$year&&$branch&&$phone){
		if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
			$pquery = $db->prepare("SELECT id FROM $which WHERE email=?");
			$pquery->bind_param("s",$mail);
			$pquery->execute();
			$pquery->store_result();
			if(!$pquery->num_rows){
				$query = $db->prepare("INSERT INTO $which(name, college, city, email, branch, year, phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
				$query->bind_param("sssssss",$name, $college, $city, $mail, $branch, $year, $phone);
				$query->execute();
				echo "Registration Successful.";
			    } else {
				echo "Email already exists!";
			}
		} else {
			echo "Invalid Email.";
		}
	} else {
		echo "All details are neccessary.";
	}
}
?>