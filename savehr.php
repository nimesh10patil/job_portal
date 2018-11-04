<?php 
require('isloggedin.php');

?>
<?php
//session_start();


	



$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);




$cno=$_POST['contact'];
$ano=(int)$cno;
if(strlen($ano) == 10 && strlen($cno) ==10)
{


#$select="select * from users where id={$_SESSION['id']}";
$s1="UPDATE `company` SET `address` = '{$_POST['address']}',`name`= '{$_POST['name']}',`website` = '{$_POST['website']}',`contact` = '{$_POST['contact']}',`description` = '{$_POST['Description']}' WHERE `company`.`id` = {$_SESSION['id']}";
$rr=mysqli_query($conn,$s1) or die($str);

}
else
{
		$_SESSION['invalid_gethrdetails']=1;
			header('Location: company_profile.php');


}



if(isset($_POST['hidden']))
{
	header('Location: company.php');
}


if(isset($rr))
{
header('Location: company.php');
}

?>