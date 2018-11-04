<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("84553192998-vuo9ejmdlicpnvje57mi24vt4apfglui.apps.googleusercontent.com");
	$gClient->setClientSecret("fWDYweK8FhqKwX3IWVHmwKld");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/Litap/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
