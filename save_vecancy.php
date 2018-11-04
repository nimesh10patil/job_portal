<?php 
require('isloggedin.php');

?>
<?php

//session_start();
$cpp=0;
$java=0;
$python=0;

$angularjs=0;
$nodejs=0;
$cNET=0;
$DBMS=0;
$DS=0;
if(isset($_POST['skill']))
{
foreach($_POST['skill'] as $skills){
	if($skills=="c++")
		$cpp=1;
	if($skills=="java")
		$java=1;
	if($skills=="python")
		$python=1;
	if($skills=="angularjs")
		$angularjs=1;
	if($skills=="nodejs")
		$nodejs=1;
	if($skills=="c#NET")
		$cNET=1;
	if($skills=="DBMS")
		$DBMS=1;
	if($skills=="DS")
		$DS=1;

}
}

$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);



$select="select * from company where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);
echo $result['cid'];

$str="INSERT INTO `vecancy`(`cid`, `c++`, `java`, `python`, `angularjs`, `node.js`, `c#.NET`, `DBMS`, `Data Structures`, `description`) VALUES ('{$result['cid']}','{$cpp}','{$java}','{$python}','{$angularjs}','{$nodejs}','{$cNET}','{$DBMS}','{$DS}','{$_POST['description']}')";
//$str="INSERT INTO `vecancy` (`cid`, `c++`, `java`, `python`, `description`) VALUES ('2',{$cpp},{$java},{$python}, 'hm')";

$rrr=mysqli_query($conn,$str) or die($str);

header('Location: company.php');

?>