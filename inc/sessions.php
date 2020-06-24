<?php
    session_start();
    if(isset($_SESSION['emailaddress'])){
        $emailaddress = $_SESSION['emailaddress'];
        $password = $_SESSION['password'];
    }else{
        sessionout();
    }

    function sessionout(){
		$headerprotocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://";
		$urlsub = explode('/', $_SERVER['PHP_SELF']);
		$domain = $urlsub[1];
		unset($urlsub[1]);
		$prevurl = base64_encode($headerprotocol.$_SERVER['HTTP_HOST'].'/'.$domain.implode('/',$urlsub));
		header("Location: login.php");
		exit();
	}
?>