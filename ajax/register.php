<?php
include '../connect.inc.php';

function numTo3DigitString($n){
	if($n>99) return strval($n);
	$s = '';
	$s = ($n%10).$s; $n/=10;
	$s = ($n%10).$s; $n/=10;
	$s = ($n%10).$s; $n/=10;
	return $s;
}

function getfid($name,$db){
	$fid = 'FX-';
	$tmp = 0;
	$tmp2 = 0;
	$nl = strlen($name);
	while(!$tmp&&$tmp2<$nl){
		if(ord($name[$tmp2])>=97&&ord($name[$tmp2])<=122){
			$fid .= chr(ord($name[$tmp2])-32);
			$tmp++;
		}else if(ord($name[$tmp2])>=65&&ord($name[$tmp2])<=90){
			$fid .= $name[$tmp2];
			$tmp++;
		}
		$tmp2++;
	}
	if(!$tmp) $fid.='F';
	$fid .= '-';

	$prevq = $db->prepare("SELECT fluxusid FROM users WHERE fluxusid LIKE '$fid%'");
	$prevq->execute();
	$prevres = $prevq->get_result();
	$prevusers = $prevres->fetch_all(MYSQLI_ASSOC);
	$gennum = 0;
	for ($i=0; $i < sizeof($prevusers); $i++) {
		$curmax = intval(substr(strrchr($prevusers[$i]['fluxusid'],'-'),1));
		if($curmax>$gennum){
			$gennum = $curmax;
		}
	}

	$fid .= numTo3DigitString($gennum+1);
	return $fid;
}

$db = mysqli_connect($MySQLhost,$MySQLuser,$MySQLpass,$MySQLdbname) or die("Could not connecy");
if(isset($_POST['name'])&&isset($_POST['college'])&&isset($_POST['city'])&&isset($_POST['mail'])&&isset($_POST['phone'])&&isset($_POST['gender'])&&isset($_POST['accommodation'])){
	$name = $_POST['name'];
	$college = $_POST['college'];
	$city = $_POST['city'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$accommodation = $_POST['accommodation'];
	if($name&&$mail&&$college&&$city&&$phone){
		if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
			$pquery = $db->prepare("SELECT id FROM users WHERE email=? LIMIT 1");
			$pquery->bind_param("s",$mail);
			$pquery->execute();
			$pquery->store_result();
			if(!$pquery->num_rows){
				$fid = getfid($name,$db);
				$query = $db->prepare("INSERT INTO users(name, college, city, email, phone, fluxusid, gender, accommodation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
				$query->bind_param("sssssssi",$name, $college, $city, $mail, $phone, $fid, $gender, $accommodation);
				$query->execute();
				echo "<div style='font-size: 150%;color:#222;'>Congratulations!<br>You have successfully registered with us.<br>You FLUXUS ID is <span style='color:#922;'>$fid</span>. You will soon recieve an e-mail with your Fluxus ID on $mail. Stay tuned.<br> Like us on FB on <a href='http://www.facebook.com/fluxus.iiti'>http://www.facebook.com/fluxus.iiti</a><br><a href='/home.html' style='font: 150% \"Mouse Memoirs\";color:white;text-decoration:none;margin:10px;'><br><span class='redbutton'>Go Home</span></a></div>";
				mail($mail, 
					"Fluxus'14 Registration", 
					"Hey $name!\r\n\r\n You have been succesfully registered to Fluxus 2014, Central India's largest techno-cultural college festival.\r\n Your fluxus ID is $fid.\r\n\r\nTo get more updates from us, Like us on Facebook: www.facebook.com/fluxus.iiti\r\nFor further information, please contact our PR Manager at +91 73 89 101 000 or drop us a mail at contactus@fluxus.in\r\nVisit us at: www.fluxus.in | Stay tuned\r\n\r\nFLUXUS HEAD OFFICE: Student Activity Center, RH 113,\r\n IIT Indore Hostel,\r\n Silver Springs Township,\r\n Phase 1, AB Bypass Road,\r\n Indore, Madhya Pradesh-452001",
					"From: Fluxus 2014 <contactus@fluxus.in>\r\nReply-To: contactus@fluxus.in");
			    } else {echo "Email already exists!"; }
		} else {echo "Invalid Email."; }
	} else {echo "All details are neccessary."; }
} else {echo "All details are neccessary."; }
?>
