<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="css/profile.css">
</head>
<style>
		@import url(http://fonts.googleapis.com/css?family=Lato:400,700);
body
{
    font-family: 'Lato', 'sans-serif';
    }
.profile 
{
    min-height: 355px;
    display: inline-block;
    }

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: red;
  font-size: 20px;
}

.icon-bar a:hover {
    background-color:black;
}.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color:red;
  font-size: 20px;
}

.icon-bar a:hover {
	transform: rotateY(360deg);
}
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
<?php
//session_start();

if(isset($_SESSION['invalid_gethrdetails']))
{
	if(	$_SESSION['invalid_gethrdetails'] ==1)
	{
				$_SESSION['invalid_gethrdetails']=0;
				echo "invalid details";
	}
}



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



$select="select * from company where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);


?>
<br>

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
            <li >
              <a href="http://localhost/litap/company.php">
              <i class="glyphicon glyphicon-home"></i>
              Home</a>
            </li>
            <li class="active">
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
       <div class="well profile profile-content profile-usertitle-name  profile-usertitle">
            <div class="col-sm-12">
              
          <form action="savehr.php" method="post">
                <div class="col-xs-12 col-sm-8">
                    
                    <p><strong>Name: </strong></p><input type="text" value=<?php echo $result['name']  ?> name="name">
                    <p><strong>Address: </strong></p><input type="text" value=<?php echo $result['address']  ?> name="address">
                     <p>
                      <p><strong>Website: </strong></p><input class="w3-input" type="text" id="website" onfocusout="myFunctionweb() "name="website" required=True value=<?php echo $result['website']  ?>>
                    <p><strong>description: </strong></p><input class="w3-input" type="text" required=True name="Description" value=<?php echo $result['description']  ?>>
                    
      <label></label>
      </p>


      <p>   
  recruiter details <br>
  
          <p><strong>Contact</strong><input type="text" name="contact" required="True" id="number" onkeyup="myFunction()" value=<?php echo $result['contact']  ?>  >   
          <div id="error"></div>
          <div id="char"></div></p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                  <input type="submit" class="btn btn-success btn-block" value="update">

                </div></form>
            </div>
    </div>
  </div>
</div>
</p>
</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	
            </div>  
  <br>


                </div>
            </div>
    	 </div>                 
		</div>
	</div>
</div>




<strong>
	
</strong>
</body>

 <script>
 

  
function myFunctionweb() {
	var x=document.getElementById("website").value; 
	
	
	
	  var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
  '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
  '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
  '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
  '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
  '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
  if( pattern.test(x))
  {
	  var cc=0;
  }
  else
  {
	   alert("invalid url");
  }
	
	
}
 
 
 
 
function myFunction() {
	var x=document.getElementById("number").value; 
    

	
	
	
	if (x.length > 10)
	{
		document.getElementById("error").innerText="must have 10 digits ";

	}
	else
	{
		document.getElementById("error").innerText="";
	}
	
	
	var c=Number(x);
	if (!c)
	{
		document.getElementById("char").innerText="only numbers allowed ";

	}
	else if ( c == "" )
	{
		var cknks=0;
	}
	else
	{

		document.getElementById("char").innerText="";
	}
	
}
</script>



</html>

