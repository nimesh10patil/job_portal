
<?php 
require('isloggedin.php');


//session_start();


if(isset($_SESSION['zerousers']))
{
	if($_SESSION['zerousers'] == 1)
		echo "zero users applicable";
	$_SESSION['zerousers']=0;
}	



$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);


if(isset($_POST['cid']))
{
	echo $_POST['cid'];
	$select="select * from company where cid={$_POST['cid']}";

}
else
{
	$select="select * from company where id={$_SESSION['id']}";

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
						<?php echo $result['name']  ?>
						 
					</div>
					<div class="profile-usertitle-job">
						<a href=<?php echo $result['website']  ?>> <?php echo $result['website'] ?></a>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="http://localhost/litap/company.php">
							<i class="glyphicon glyphicon-home"></i>
							Home</a>
						</li>
						<li>
							<a href="http://localhost/Litap/company_profile.php">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="http://localhost/litap/add_vecancy.php">
							<i class="glyphicon glyphicon-plus"></i>
							Add Vacant Seats </a>
						</li>
						<li>
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
            <div class="profile-content profile-content profile-usertitle-name  profile-usertitle">

<br>

<br>
<br>

						<?php

if(isset($_POST['cid']))
{
	$hmmmm=0;
}
else
{
 ?>

<?php
$select="select * from company where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);

$select_v="select * from vecancy where cid={$result['cid']}";
$rrr=mysqli_query($conn,$select_v) or die($select);
$i=0;
?>
<h1>Post to be applied for : <br></h1>
<?php

while($result_v=mysqli_fetch_assoc($rrr))
{	$i++;
echo "<div class=profile-usertitle-name> {$i} :  ".$result_v['description']."</div>";
?>

<form action="delete_vecancy.php" method="post">
 <input type="hidden" class="btn btn-success" name="id" value=<?php echo  $result_v['id'] ?> >
  <br>
 <input type="submit" class="btn btn-success" value="Delete Vacancy" >
 <br>

</form>
<br>





<?php	
}
}
?>
            </div>
		</div>
	</div>
</div>

<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    
                 
                </div>             
               
</body>
</html>
