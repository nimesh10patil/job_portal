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
if(isset($_POST['skills']))
{
foreach($_POST['skills'] as $skills){
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



$select="select * from users where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);
echo $result['uid'];



$select_uid="select * from skills where uid={$result['uid']}";
$rrr=mysqli_query($conn,$select_uid) or die($select);

$result_u=mysqli_fetch_assoc($rrr);	
	
	if(isset($result_u))
	{
$s1="UPDATE `skills` SET `c++` = {$cpp}, `java` = '{$java}', `python` = '{$python}',`c++` = {$cpp},`node.js` = {$nodejs}, `angularjs` = '{$angularjs}', `c#.NET` = '{$cNET}',`DBMS` = {$DBMS}, `Data Structures` = '{$DS}' WHERE `skills`.`uid` ={$result['uid']} ";

		//$s1="UPDATE `skills` SET `c++` = '{$cpp}',`java`= '{$java}', `python`='{$python}' WHERE `skills`.`uid` = '{$result['uid']}'";
$rrr=mysqli_query($conn,$s1) or die($s1);
header('Location: profile.php');

		exit();
	}	













$str="INSERT INTO `skills` (`uid`, `c++`, `java`, `python`, `angularjs`, `node.js`, `c#.NET`, `DBMS`, `Data Structures`) VALUES ('{$result['uid']}', '{$cpp}','{$java}','{$python}','{$angularjs}','{$nodejs}','{$cNET}','{$DBMS}','{$DS}')";
//$str="INSERT INTO `vecancy` (`cid`, `c++`, `java`, `python`, `description`) VALUES ('2', '1', '1', '1', 'hm')";

$rrr=mysqli_query($conn,$str) or die($str);

header('Location: profile.php');

?>