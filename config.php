<?php
session_start();
	if(!isset($_SESSION['lang']))
		$_SESSION['lang'] = 'en';
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang']&& !empty($_GET['lang'])){
		if($_GET['lang'] == 'en')
			$_SESSION['lang'] = 'en';
		else if($_GET['lang'] == 'hn')
			$_SESSION['lang'] = 'hn';
		else if($_GET['lang'] == 'ta')
			$_SESSION['lang'] = 'ta';
	}

/*echo "Choosen Language:" . $_SESSION['lang'];*/
require_once "languages/" . $_SESSION['lang'] . ".php";
/*function check(){
	require_once "languages/" . $_SESSION['lang'] . ".php";
}*/

?>