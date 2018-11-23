<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("your client id);
	$gClient->setClientSecret("your client secret");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/Litap/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
