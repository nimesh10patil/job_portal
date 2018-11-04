<?php 
require('isloggedin.php');

?>
<?php
if(isset($_POST["send_OTP"])) {
	require('textlocal.class.php');

	echo "send_OTP is set now<br>";
	$textlocal=new TextLocal($yourEmailId,$yourTextLocalPassword);
	$mobile_no=$_POST["send_OTP_text"];
	$numbers=array($mobile_no);
	$sender='TXTLCL';
	$OTP=rand(1000,9999);
	$message = "Your One Time Password is " . $OTP;

	try {
        $response = $textlocal->sendSms($numbers, $message, $sender);
        setcookie('otp',$OTP);
        echo "yes";
	}
	catch(Exception $e) {
		die('Error: '.$e->getMessage());
	}
}

if(isset($_POST["verify_OTP"])) {
	$verified_OTP=$_POST["verify_OTP_text"];
	if($verified_OTP==$_COOKIE["otp"]) {
		echo "Congratulations,your mobile no. is verified.";
	}
	else {
		echo "Please enter the correct OTP";
	}
}
?>

<html>
<head>
<title>OTP SMS Mobile Verification</title>
</head>
<body>

	<div class="container">
		<form name="main-form" action="" method="POST">
			<div class="error"></div>
			<div class="form-heading">Mobile Number Verification</div>						
			<input type="text" name="send_OTP_text" placeholder="Enter the number">
			<input type="submit" name="send_OTP" >
			<br>
			<input type="text" name="verify_OTP_text" placeholder="Enter the OTP">
			<input type="submit" name="verify_OTP">
		</form>	
	</div>
</html>
</body>