<?php
//session_start();

require('isloggedin.php');
		
	


$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);



$select="select * from users where uid={$_POST['uid']}";

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
      <a class="navbar-brand" href="http://localhost/litap/applicable.php">LITAP</a>
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
				<div class="profile-userpic">				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $result['fname']." ".$result['lname'] ?>
						<br><?php echo $result['email'] ?>
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

 <p><strong>experience of: </strong><?php echo $result['experience_of']  ?>   - months</p>   <br>

   <?php
}






?>

					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="http://localhost/litap/company.php">
							<i class="glyphicon glyphicon-home"></i>
							List </a>
						</li>
						
					
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class=" profile-usertitle profile-content profile-usertitles ">
		


<p><strong>Contact : </strong><?php echo $result['contact']  ?> </p>  <br>

<p><strong>SSC school : </strong><?php echo $result['ssc_s']  ?> </p>  <br>

<p><strong>SSC marks : </strong><?php echo $result['ssc']  ?> </p>  <br>


<p><strong>HSC school : </strong><?php echo $result['hsc_s']  ?> </p>  <br>

<p><strong>HSC marks : </strong><?php echo $result['hsc']  ?> </p>  <br>

<p><strong>Graduation : </strong><?php echo $result['graduation']  ?> </p>  <br>

<p><strong>Graduation Branch : </strong><?php echo $result['grad_b']  ?> </p>  <br>


<p><strong>Graduation from : </strong><?php echo $result['graduation_s']  ?> </p>  <br>

<p><strong>Graduation Score : </strong><?php echo $result['graduation_m']  ?> </p>  <br>


<p><strong>Post Graduation : </strong><?php echo $result['post_graduation']  ?> </p>  <br>

<p><strong>Post Graduation Branch : </strong><?php echo $result['post_grad_b']  ?> </p>  <br>


<p><strong>Post Graduation in : </strong><?php echo $result['post_graduation_s']  ?> </p>  <br>

<p><strong>Post Graduation Score : </strong><?php echo $result['post_graduation_marks']  ?> </p>  <br>

</div>


            </div>
		</div>
	</div>
</div>

<br>
<br>
<h2></h2>
			
  <div class="over">
         			



 
</body>
</html>
