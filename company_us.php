
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
					
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						
						 
					</div>
					<div class="profile-usertitle-job">
						</a>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="http://localhost/litap/profile.php">
							<i class="glyphicon glyphicon-home"></i>
							Home</a>
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
            <div class="profile-usertitle profile-usertitle-name profile-content profile-usertitles">
            	Company : <?php echo $result['name']  ?><br>Website : <a href=<?php echo $result['website']  ?>> <?php echo $result['website'] ?></a><br>


            	<br>ADDRESS : <?php echo $result['address']  ?><br>
						CONTACT : <?php echo $result['contact']  ?><br>
						<br>COMPANY DESCRIPTION : <?php echo $result['description']  ?>


<br>

<br>
<br>
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
