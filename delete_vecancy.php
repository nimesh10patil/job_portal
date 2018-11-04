<?php 
require('isloggedin.php');

?>
<?php

$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);

$str="DELETE FROM `vecancy` WHERE `vecancy`.`id` ={$_POST['id']} ";

$rr=mysqli_query($conn,$str) or die($select);
header('Location: company.php');

?>