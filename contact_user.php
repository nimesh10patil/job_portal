<?php

if(isset($_POST['uid']))

{
	session_start();
	
	
$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);

	//fetch vecancy
	$select_vecancy="select * from vecancy where id={$_POST['vid']}";
	$ve=mysqli_query($conn,$select_vecancy) or die($select_vecancy);
	$result_v=mysqli_fetch_assoc($ve);

	//fetch company
	$select_company="select * from company where id={$_SESSION['id']}";
	$co=mysqli_query($conn,$select_company) or die($select_company);
	$result_c=mysqli_fetch_assoc($co);

	//fetch user
	$select_user="select * from users where uid={$_POST['uid']}";
	$user=mysqli_query($conn,$select_user) or die($select_user);
	$result_u=mysqli_fetch_assoc($user);

$_SESSION['CMAIL']=$result_u['email'];
//user details
$_SESSION['RMAIL']=$result_c['email'];
//resume is to n=be attached
$_SESSION['iscompany']=1;
	

$body="dear ".$result_u['fname']." ".$result_u['lname']." tame ".$result_v['description']." job nu offer appu chu.  :) navaratri mate ";
$_SESSION['Subject']="WE ARE OFFERING YOU JOB";
$_SESSION['BODY']=$body;
echo "hii";

$applied="INSERT INTO `contacted` (`uid`, `vid`) VALUES ('{$_POST['uid']}', '{$_POST['vid']}')";
$r_applied=mysqli_query($conn,$applied) or die($applied);

$_SESSION['is_user']=0;


header('Location: sendmail.php');



	
	
}



?>