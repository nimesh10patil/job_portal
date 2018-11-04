<?php
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();


	
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];

$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);
		
		
if(isset($_SESSION['i_m_hr']))
{
	$select="select * from company where id='{$_SESSION['id']}'";
	$check=mysqli_query($conn,$select);
	$exist_or_not=mysqli_affected_rows($conn);
	
	
	if($exist_or_not>=1)
	{
		echo $exist_or_not;
		header('Location: company.php');

		exit();
	}	
	
		$q="INSERT INTO company(id,fname,lname,email,gender) VALUES('{$_SESSION['id']}','{$userData['givenName']}','{$userData['familyName']}','{$userData['email']}','{$userData['gender']}')";

	$result=mysqli_query($conn,$q);

	header('Location: gethrdetails.php');
	
	
	
	
	
	
	
	
}
else
{
		

	$select="select * from users where id='{$_SESSION['id']}'";
	$check=mysqli_query($conn,$select);
	$exist_or_not=mysqli_affected_rows($conn);
	
	
	if($exist_or_not>=1)
	{
		echo $exist_or_not;
		header('Location: profile.php');

		exit();
	}
	
	
	$q="INSERT INTO users(id,fname,lname,email,gender) VALUES('{$_SESSION['id']}','{$userData['givenName']}','{$userData['familyName']}','{$userData['email']}','{$userData['gender']}')";

	$result=mysqli_query($conn,$q) or die($result);
if(isset($result))
{
	header('Location: getdetails.php');
	
	exit();
}	
	
	
}

?>