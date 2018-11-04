<?php 
require('isloggedin.php');

?>
<?php
//session_start();

/*
if(isset($_SESSION['i_m_hr']))
{
	
	echo "hr login";
	exit();
}	

*/



function isvalid($no){
	
	
	$ano=(int)$no;
	
	if( strlen($ano) ==  strlen($no)    )
	{	if( $ano <= 100)
		{
		return 0;
		}
		else
		{
			return 1;
		}
	}
	else
	{
	return 1;
	}
	

	
}







$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);



if(isset($_POST['address']))
{

$cno=$_POST['contact'];
$ano=(int)$cno;
if(strlen($ano) == 10 && strlen($cno) ==10)
{
echo isvalid($_POST['ssc'])."ghhh ".isvalid($_POST['hsc'])." ".isvalid($_POST['postgraduation_marks'])." ".isvalid($_POST['graduation_marks']);



if(isset($_POST['postgraduation']))
{
	if($_POST['postgraduation'] == "postgraduation")
	{	


if(isvalid($_POST['ssc']) || isvalid($_POST['hsc']) ||  isvalid($_POST['graduation_marks']))
{
	$_SESSION['invalid_getdetails']=1;
if(isset($_POST['user_profile']))
{
header('location:profile.php'); 
}
else
{
	header('location:getdetails.php'); 

}	
	
}
	}
	else
	{
		
if(isvalid($_POST['ssc']) || isvalid($_POST['hsc']) || isvalid($_POST['postgraduation_marks']) || isvalid($_POST['graduation_marks']))
{
	$_SESSION['invalid_getdetails']=1;
if(isset($_POST['user_profile']))
{
header('location:profile.php'); 
}
else
{
	header('location:getdetails.php'); 

}	
	
}
	}
		

}




if(isset($_POST['postgraduation']))
{
	if($_POST['postgraduation'] == "postgraduation")
	{	
		$s11="UPDATE `users` SET `contact` = '{$_POST['contact']}', `address`= '{$_POST['address']}', `ssc`='{$_POST['ssc']}', `hsc`='{$_POST['hsc']}',`graduation`='{$_POST['graduation']}',`ssc_s`='{$_POST['ssc_s']}',`hsc_s`='{$_POST['hsc_s']}',`graduation_s`='{$_POST['graduation_s']}',`graduation_m`='{$_POST['graduation_marks']}',`experience_at`='{$_POST['experience_at']}',`experience_of`='{$_POST['experience_of']}',`grad_b`='{$_POST['graduation_b']}' WHERE `users`.`id` = {$_SESSION['id']}";

	}
	else
	{	
		
		$s11="UPDATE `users` SET `contact` = '{$_POST['contact']}', `address`= '{$_POST['address']}', `ssc`='{$_POST['ssc']}', `hsc`='{$_POST['hsc']}',`graduation`='{$_POST['graduation']}',`ssc_s`='{$_POST['ssc_s']}',`hsc_s`='{$_POST['hsc_s']}',`graduation_s`='{$_POST['graduation_s']}',`post_graduation`='{$_POST['postgraduation']}',`post_graduation_s`='{$_POST['postgraduation_s']}',`post_graduation_marks`='{$_POST['postgraduation_marks']}',`graduation_m`='{$_POST['graduation_marks']}',`experience_at`='{$_POST['experience_at']}',`experience_of`='{$_POST['experience_of']}',`grad_b`='{$_POST['graduation_b']}',`post_grad_b`='{$_POST['post_graduation_b']}' WHERE `users`.`id` = {$_SESSION['id']}";

	}
}



//$s1="UPDATE `users` SET `contact` = '{$_POST['contact']}', `address`= '{$_POST['address']}', `ssc`='{$_POST['ssc']}', `hsc`='{$_POST['hsc']}', `degree`='{$_POST['degree']}' WHERE `users`.`id` = {$_SESSION['id']}";
$rrr=mysqli_query($conn,$s11) or die($s11);
//$s11="UPDATE `users` SET `contact` = '{$_POST['contact']}', `address`= '{$_POST['address']}', `ssc`='{$_POST['ssc']}', `hsc`='{$_POST['hsc']}',`graduation`='{$_POST['graduation']}',`scc_s`={$_POST['ssc_s']},`hsc_s`={$_POST['hsc_s']},`graduation_s`={$_POST['ssc_s']},`post_graduation`={$_POST['post_graduation']},`post_graduation_s`={$_POST['post_graduation_s']},`post_graduation_marks`={$_POST['post_graduation_marks']},`graduation_m`={$_POST['graduation_m']} WHERE 1";
header('location:profile.php'); 




}
else
{

$_SESSION['invalidnumber']=1;
if(isset($_POST['user_profile']))
{
header('location:profile.php'); 
}
else
{header('location:getdetails.php'); 

}
}



}

	



		








		
		
		
	







?>