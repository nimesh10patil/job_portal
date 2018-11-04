<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="css/profile.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    padding: 8px 15px;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 2px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.navbar {
        margin-bottom: 0;
        background-color: black;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
    }
    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #00FF00 !important;
        background-color: #fff !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }
</style>
<body>
	
<?php 
require('isloggedin.php');

?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LITAP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      
             <li><a href="/litap/logout.php">logout</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<br>
<br>

<div class="container">
    <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <img src="<?php echo $_SESSION['picture'] ?>" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
      
          </div>
          <div class="profile-usertitle-job">
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li >
              <a href="http://localhost/litap/company.php">
              <i class="glyphicon glyphicon-home"></i>
              Home</a>
            </li>
            <li >
              <a href="http://localhost/Litap/company_profile.php">
              <i class="glyphicon glyphicon-user"></i>
              Account Settings </a>
            </li>
            <li >
              <a href="http://localhost/litap/add_vecancy.php">
              <i class="glyphicon glyphicon-plus"></i>
              Add Vacant Seats </a>
            </li>
            <li class="active">
              <a href="http://localhost/litap/applicable.php" >
              <i class="glyphicon glyphicon-user"></i>
              Applicable </a>
            </li>
            <li>
              <a href="http://localhost/litap/Logout.php">
              <i class="glyphicon glyphicon-off"></i>
              Logout </a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
      </div>
    <div class="col-md-9">
      <div class="profile-usertitle-name profile-content ">
<?php

//session_start();
/*
		$select_user="select * from users where id={$_SESSION['id']}";
$uid=mysqli_query($conn,$select_user) or die($select);
$result_uid=mysqli_fetch_assoc($uid);
$select_skill="select * from skills where uid={$result_uid['uid']}";
$uid=mysqli_query($conn,$select_skill) or die($select);
$result_s=mysqli_fetch_assoc($uid);

$select="select * from vecancy";
$rr=mysqli_query($conn,$select) or die($select);
*/

		
		
		


$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);

$select_skills="select * from skills";
$result_skills=mysqli_query($conn,$select_skills) or die($result_skills);


$select_company="select * from company where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select_company) or die($select_company);
$result=mysqli_fetch_assoc($rr);

$select_vecancy="select * from vecancy where cid={$result['cid']}";
$rr=mysqli_query($conn,$select_vecancy) or die($select_vecancy);





$j=1;

$i=1;
while($result_v=mysqli_fetch_assoc($rr))
{	

echo "{$i} Vacancy Description: ".$result_v['description']."<br><br>";
	$i++;
	$result_skills=mysqli_query($conn,$select_skills) or die($result_skills);
$j=1;
		while($result_s=mysqli_fetch_assoc($result_skills))
		{
		
if($result_v['c++']<=$result_s['c++'] && $result_v['java']<=$result_s['java'] && $result_v['python']<=$result_s['python'] && $result_v['angularjs']<=$result_s['angularjs'] && $result_v['node.js']<=$result_s['node.js'] && $result_v['c#.NET']<=$result_s['c#.NET'] && $result_v['DBMS']<=$result_s['DBMS'] && $result_v['Data Structures']<=$result_s['Data Structures'] )
{
//to fetch username
$select_user="select * from users where uid={$result_s['uid']}";
$user=mysqli_query($conn,$select_user) or die($select_user);

$c=mysqli_num_rows($user);
/* echo "hii";
if($c == 0)
{
	
	echo "hiiiiiiiii";
	$_SESSION['zerousers']=1;
	header('location: company.php');
}
*/
$result_u=mysqli_fetch_assoc($user);
//echo "";
echo "Name : ".$result_u['fname']." ".$result_u['lname'];

?>

<form action="profile_c.php" method="post">
<input type="hidden" name="uid" value=<?php echo $result_u['uid']?>>
<br>
<input type="submit" value="Check Profile" class="button button4">
</form>
<br>
<?php

//to fetch contacted details
$no_of_contacted="select * from contacted";
$no=mysqli_query($conn,$no_of_contacted) or die($no_of_contacted);
$c1=mysqli_num_rows($no);
$cntct=0;

if($c1 > 0)
{
	

$select_user_contacted="select * from contacted where uid={$result_u['uid']}";
$result_user_contacted=mysqli_query($conn,$select_user_contacted) or die($select_user_contacted);
while($x=mysqli_fetch_assoc($result_user_contacted))
{
	if($x['vid'] == $result_v['id'])
	{
		$cntct=1;
	}
}
}

if($cntct == 1)
{
	echo "<br>you contacted this user <br>";
  echo "<br>";
	$j++;
}

else
{


$j++;
?>


<form action="contact_user.php" method="post">
<input type="submit" class="button button4" value="Contact" name="submit" ><br>
<input type="hidden" name="uid" value="<?php echo  $result_u['uid'];?>" />
<input type="hidden" name="vid" value="<?php echo  $result_v['id'];?>" />

</form>
<br>
<?php
}
}	
}
}






?>
</div>
</div>
</div>

</div>
</body>
</html>
