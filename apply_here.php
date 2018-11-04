<?php 
require('isloggedin.php');

?>
<?php

//session_start();


		



$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);



$select="select * from users where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);





if(isset($_POST['cid']))
{
//company details	
$selectq="select * from company where cid={$_POST['cid']}";
$rrr=mysqli_query($conn,$selectq) or die($selectq);
$resultq=mysqli_fetch_assoc($rrr);
$_SESSION['CMAIL']=$resultq['email'];
//user details
$_SESSION['RMAIL']=$result['email'];
//resume is to n=be attached


$select_v="select * from vecancy where id={$_POST['id']}";

$rrrr=mysqli_query($conn,$select_v) or die($select_v);
$result_v=mysqli_fetch_assoc($rrrr);


$applied="INSERT INTO `applied` (`uid`, `cid`) VALUES ('{$_SESSION['id']}', '{$result_v['id']}')";
$apply=mysqli_query($conn,$applied) or die($applied);


$body="mi ".$result['fname']." ".$result['lname']." mala ".$result_v['description']." job hava hota dyal ka :) <html><body><table><tr>

<td>ssc details : </td><td>".$result['ssc']."</td>


</tr>
<tr>

<td>hsc details : </td><td>".$result['hsc']."</td>


</tr>
<tr>

<td>B.E from : </td><td>".$result['degree']."</td>


</tr>
</table></body></html>";



$_SESSION['Subject']="JOB HAVA HOTA";
$_SESSION['BODY']=$body;

$_SESSION['is_user']=1;

header('Location: sendmail.php');

	
}




?>