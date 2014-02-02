<?php
// echo $_SERVER['REQUEST_URI'];
if(substr($_SERVER['REQUEST_URI'],-1)=='/'){
	header('Location: '.substr($_SERVER['REQUEST_URI'],0,-1));
}
$urlpar = explode('/',substr($_SERVER['REQUEST_URI'],1));
switch ($urlpar[0]) {
	case '':
	case '/':
		header('Location: /');
		break;
	case 'tech':
	case 'technical':
	case 'technicals':
		header('Location: events.html#tech');
		break;
	case 'cult':
	case 'cultural':
	case 'culturals':
		header('Location: events.html#cult');
		break;
	case 'proshows':
		header('Location: events.html#proshows');
		break;
	case 'workshop':
	case 'workshops':
		header('Location: events.html#workshop');
		break;
	case 'quiz':
	case 'quizfest':
		header('Location: events.html#quiz');
		break;
	case 'litereary':
	case 'literearyfest':
	case 'litfest':
		header('Location: events.html#literary');
		break;
	case 'sponsors':
		include('sponsors.html');
		break;
	case 'statistics':
		include('stat.php');
		break;
	case 'bkc':
		echo "You're awesome.";
		break;
	default:
		header('Location: /');
		break;
}
?>