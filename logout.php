<?php
	session_start();
	$endTime = time() - 1800;
	$_SESSION['emailaddress'] = "";
	session_destroy();
	unset($_COOKIE['ulvl']);
	setcookie('ulvl', '', $endTime, '/');
	header("Location: login.php");
	exit();
?>