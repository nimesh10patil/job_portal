<?php
//session_start();

require('isloggedin.php');
		
	


$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);


if(isset($_POST['uid']))
{
$select="select * from users where uid={$_POST['uid']}";
}
else
{
$select="select * from users where id={$_SESSION['id']}";
}
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="css/profile.css">
</head>
<style>
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
<div class="jumbotron text-center">
  <h1>LITAP</h1>
  <p>We Find The Best</p>
 
</div>

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
						<?php echo $result['fname']." ".$result['lname'] ?>
						<?php echo $result['email'] ?>
					</div>
					<div class="profile-usertitle-job">
						
<?php
 if($result['experience_of'] == 0)
 {
	 ?>
	 <h3>Fresher</h3>
	 
 
 <?php
 }
else
{	
 ?>
 
 
 <p><strong>experience :</strong><?php echo $result['experience_at']  ?> </p>  <br>

 <p><strong>for </strong><?php echo $result['experience_of']  ?>   - months</p>   <br>

   <?php
}



if(isset($_POST['uid']))
{
	$dncgd=0;
}
else
{


?>

					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							List </a>
						</li>
						<li>
							<a href="http://localhost/Litap/add_skills.php">
							<i class="glyphicon glyphicon-plus"></i>
							Add Skills </a>
						</li>
						<li>
							<a href="http://localhost/Litap/user_profile.php">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						
						
						<li>
							<a href="http://localhost/Litap/logout.php">
							<i class="glyphicon glyphicon-off"></i>
							Logout </a>
						</li>
						
					
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content profile-usertitle-name  profile-usertitle">
			   <?php
$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);
$select_user="select * from users where id={$_SESSION['id']}";
$uid=mysqli_query($conn,$select_user) or die($select);
$result_uid=mysqli_fetch_assoc($uid);
if(isset($result_uid['ssc']))
	
	{

$select_skill="select * from skills where uid={$result_uid['uid']}";
$uid=mysqli_query($conn,$select_skill) or die($select);
$result_s=mysqli_fetch_assoc($uid);



$select="select * from vecancy";
$rr=mysqli_query($conn,$select) or die($select);

$select_applied="select cid from applied where uid={$_SESSION['id']}";
$rr_applied=mysqli_query($conn,$select_applied) or die($select_applied);

?>

<strong>List of Jobs You Can Apply</strong><br>

<?php

$i=0;
while($result_v=mysqli_fetch_assoc($rr))
{	

if($result_v['c++']<=$result_s['c++'] && $result_v['java']<=$result_s['java'] && $result_v['python']<=$result_s['python'] && $result_v['angularjs']<=$result_s['angularjs'] && $result_v['node.js']<=$result_s['node.js'] && $result_v['c#.NET']<=$result_s['c#.NET'] && $result_v['Data Structures']<=$result_s['Data Structures'] && $result_v['DBMS']<=$result_s['DBMS'])
{


$i++;
$mn=1;
while($result_applied=mysqli_fetch_array($rr_applied))
{	

?>

<h2> <?php echo "{$i} ".$result_v['description']."<br>"; ?></h2>


<?php
if($result_applied['cid'] == $result_v['id']);
		{
		$mn=0;
		echo "<br>You Applied Here<br>";
		break;
		}
}
if($mn==1)
{	

?>

<h2><?php echo "<div class=profile-usertitle-name>{$i}   ".$result_v['description']."<br>"; ?></h2>

<?php


?>


<form action="company_us.php" method="post">
<input type="submit" class="btn btn-info btn-block" value="company details" ><br>
<input type="hidden" name="cid" value="<?php echo  $result_v['cid'];?>" />
</form>




<form action="apply_here.php" method="post">
<input type="submit" class="btn btn-info btn-block" value="apply" ><br>
<input type="hidden" name="cid" value="<?php echo  $result_v['cid'];?>" />


<input type="hidden" name="id" value="<?php echo  $result_v['id'];?>" />
</form>





<?php

}
$mn=1;
}	
}

	}
	else
	{
		header('location:getdetails.php');
	}



}
	?>

            </div>
		</div>
	</div>
</div>

<br>
<br>
<h2></h2>
			
  <!--<div class="over">
         			<p><strong>Gender </strong><?php echo $result['gender'] ?></p>

<p><strong>Contact:</strong><?php echo $result['contact']  ?> </p>  <br>

<p><strong>ssc school:</strong><?php echo $result['ssc_s']  ?> </p>  <br>

<p><strong>ssc marks:</strong><?php echo $result['ssc']  ?> </p>  <br>


<p><strong>hsc school:</strong><?php echo $result['hsc_s']  ?> </p>  <br>

<p><strong>hsc marks</strong><?php echo $result['hsc']  ?> </p>  <br>

<p><strong>gradauation</strong><?php echo $result['graduation']  ?> </p>  <br>


<p><strong>gradauation from</strong><?php echo $result['graduation_s']  ?> </p>  <br>

<p><strong>graduation score</strong><?php echo $result['graduation_m']  ?> </p>  <br>


<p><strong>post gradauation</strong><?php echo $result['post_graduation']  ?> </p>  <br>


<p><strong>post gradauation from</strong><?php echo $result['post_graduation_s']  ?> </p>  <br>

<p><strong>post graduation score</strong><?php echo $result['post_graduation_marks']  ?> </p>  <br>

</div>

-->




 
</body>
</html>
