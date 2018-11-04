<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="css/profile.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
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
figcaption.ratings
{
    margin-top:20px;
    }
figcaption.ratings a
{
    color:#f1c40f;
    font-size:11px;
    }
figcaption.ratings a:hover
{
    color:#f39c12;
    text-decoration:none;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
body{
  
  background-size:100% 100%;
  background-attachment: fixed;
  background-repeat:no-repeat;
  font-family: 'Open Sans', sans-serif;
  padding-bottom: 40px;
  background-color: #f2f2f2;
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
    background-color: #000;
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
  color: red;
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
 <div class="icon-bar">
 <a href="/litap/logout.php"  class="google"><i class="fa fa-power-off"></i></a>
 </div>


<?php
//session_start();

require('isloggedin.php');
		
	


$user='root';
$pass="";
$db='job_portal';
$conn=mysqli_connect("localhost",$user,$pass,$db);



$select="select * from users where id={$_SESSION['id']}";
$rr=mysqli_query($conn,$select) or die($select);
$result=mysqli_fetch_assoc($rr);


if(isset($_SESSION['invalid_getdetails']))
{
	if($_SESSION['invalid_getdetails'] == 1)
	{
		$_SESSION['invalid_getdetails']=0;
		?>
		<strong><h1>invalid details plz feel form again :(</h1><strong>
		
		<?php 
	}
}



?>

<script>
function mobile()()
{
	var no=document.form.contact.value;
	alert("nimesh");
}
</script>

<br>

<br>
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
						<?php echo $result['fname']." ".$result['lname'] ?>
						<?php echo $result['email'] ?>
					</div>
					
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="http://localhost/Litap/profile.php">
							<i class="glyphicon glyphicon-home"></i>
							List </a>
						</li>
						<li >
							<a href="http://localhost/Litap/add_skills.php">
							<i class="glyphicon glyphicon-plus"></i>
							Add Skills </a>
						</li>
						<li  class="active">
						
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
            <div class="profile-content">
	<div class="row" style="padding-top:10px">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile profile-usertitle-name" >
            <div class="col-sm-12">
<form action="save.php" method="post">

                <div class="col-xs-12 col-sm-8">
<!--		<div class="col-md-3">
			<img style="width: 80%;" src="">
		</div>
!-->						<h2><?php echo"<div class=profile-usertitle-name>". $result['fname']." ".$result['lname'] ."</div>"?></h2>
			
         			<p><strong>Email </strong> <?php echo $_SESSION['email'] ?></p>

         			
					<?php
						if(isset($result['contact']))
						{
					?>

					<p><strong>Contact</strong><input type="text"  required="True" id="number" onkeyup="myFunction()" value=<?php echo $result['contact']  ?> name="contact">   
					<div id="error"></div>
					<div id="char"></div></p>
         			
<?php
						if(isset($_SESSION['invalidnumber']))
						{
							if($_SESSION['invalidnumber'] == 1)
							{ $_SESSION['invalidnumber']=0;

								?>
															<h1>invalid mobile number plz retry
							<?php
							} 
							}
?>
	 
					
					<p><strong>SSC Marks</strong><input type="text" required="True"name="ssc" id="sscmarks" onkeyup="myFunction1()"value=<?php echo $result['ssc']  ?> ></p>
					<div id="sscmarkserror"></div>
					<div id="sscmarkschar"></div></p>
					
					<p><strong>SSC School </strong> <input type="text" name="ssc_s" required="True" value=<?php echo $result['ssc_s']  ?> ></p>

					
					<p><strong>HSC Marks</strong><input type="text" required="True" name="hsc" id="hscmarks" onkeyup="myFunction2()" value=<?php echo $result['hsc']?> ></p>
					<div id="hscmarkserror"></div>
					<div id="hscmarkschar"></div></p>
					
					<p><strong>HSC School </strong> <input type="text" required="True" name="hsc_s" value=<?php echo $result['hsc_s']  ?>> </p>

Graduation Details: <br>
<?php echo $result['graduation']."<br>" ; 
 echo $result['grad_b']."<br>" ?>


						  <select name="graduation">
        <option value="">graduation</option>

		<option value="BE">B.E</option>
	    <option value="MBA">MBA</option>
		<option value="BSC-it">BSC-it</option>
		<option value="bsc">BSC</option>

 
 </select>
	
						  <select name="graduation_b" required=True>
      <br>  <option value="">branch</option>

		<option value="computer">computer</option>
	    <option value="electrical">electrical</option>
		<option value="mechanical">mechanical</option>
		<option value="maths">maths</option>

 
 </select>
 <br>
					
					<p>Graduation From  <input type="text" required="True" name="graduation_s" value=<?php echo $result['graduation_s']  ?>> </p>
										
					<p><strong>Graduation Marks </strong> <input type="text" name="graduation_marks" required="True" id="degmarks" onkeyup="myFunction3()"value=<?php echo $result['graduation_m']  ?> > </p>
					
					<div id="degreeerror"></div>
					<div id="degreeechar"></div></p>
					

					<p><strong>Your Address</strong> <input type="text" value=<?php echo $result['address']  ?> name="address"></p>

Optional :<br>


<br>
Post Graduation Details: <br>
<?php echo $result['post_graduation']."<br>" ; 
 echo $result['post_grad_b']."<br>" ?>

					  <select name="postgraduation">

        <option value="">post graduation</option>

	<option value="ME">M.E</option>
	    <option value="MTECH">M. Tech</option>
 <option value="MBA">MBA</option>
 
 </select>
 <br>
 
   <select name="post_graduation_b" >
        <option value="">branch</option>

		<option value="computer">computer</option>
	    <option value="electical">electical</option>
		<option value="mechanical">mechanical</option>
		<option value="maths">maths</option>

 
 </select>
 
 					<p><strong>post graduation from </strong> <input type="text"  name="postgraduation_s" value=<?php echo $result['post_graduation_s']  ?> > </p>

 					<p><strong>post graduation Marks </strong> <input type="text" name="postgraduation_marks" id="postmarks" onkeyup="myFunction4()"value=<?php echo $result['post_graduation_marks']  ?> > </p>
<div id="posterror"></div>
					<div id="postchar"></div></p>
					
					
					
					<p><strong>experience at </strong> <input type="text" name="experience_at"   value=<?php echo $result['experience_at']  ?> > </p>
					
										<p><strong>experience of </strong> <input type="number" name="experience_of"  value=<?php echo $result['experience_of']  ?> > </p>

					
					
					
				</h1>
			</div>
					<div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="<?php echo $_SESSION['picture'] ?>" alt="" class="img-circle img-responsive">
                        
                    </figure>
                </div>
										<input type="hidden" name="user_profile">

					<?php
						}
					else
					{
						
					?>
				
															<tr>
						<td>contact</td>
	<td><input type="text"  required="True" id="number" onkeyup="myFunction()" value=<?php echo $result['contact']  ?> name="contact"></td>

												<td><div id="error"></td><br>
																								<td><div id="char"></td>			
			
			<?php
						if(isset($_SESSION['invalidnumber']))
						{
							if($_SESSION['invalidnumber'] == 1)
							{ $_SESSION['invalidnumber']=0;

								?>
															<td><h1>invalid mobile number plz retry</td>
							<?php
							} 
							}
?>
			
			
			
			
			
			
			
			
						<td>ssc</td>
												<td><input type="text" required="True" name="ssc"></td>
					</tr>
					<tr>
						<td>hsc</td>
												<td><input type="text" required="True" name="hsc"></td>

					</tr>
					<tr>
						<td>degree</td>
						<td><input type="text" required="True"   name="degree"></td>
					</tr>
					<tr>
						<td>address</td>
						<td><input type="text" required="True" name="address"></td>
					</tr>
					<input type="hidden" name="user_profile">
					<?php
					}
					?>
					
					
		</div>
	

</h1>
</td>

</td>

</td>
</tr>



<div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                   <span class="fa fa-user"><input class="btn btn-info btn-block" type="submit" value="update">

</form>     
           </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                 
             













</body>


 <script>
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
	
function myFunction1() {
	var x=document.getElementById("sscmarks").value; 
    
	
	
	
	if (x > 100)
	{
		document.getElementById("sscmarkserror").innerText="can't exeed than 100 % ";
		<?php $_SESSION['invalid_ssc']=1; ?>

	}
	else
	{
				<?php $_SESSION['invalid_ssc']=0; ?>

		document.getElementById("sscmarkserror").innerText="";
	}
	
	
	

	var c=Number(x);
	if (!c)
	{
		document.getElementById("sscmarkschar").innerText="only numbers allowed ";
		<?php $_SESSION['invalid_ssc']=1; ?>

	}
	else if ( c == "" )
	{
		<?php $_SESSION['invalid_ssc']=0; ?>

var cknks=0;
	}
	else
	{
		<?php $_SESSION['invalid_ssc']=0; ?>

		document.getElementById("sscmarkschar").innerText="";
	}
	//hsc
}

function myFunction2() {

	var x=document.getElementById("hscmarks").value; 
    
	
	
	
	if (x > 100)
	{
		document.getElementById("hscmarkserror").innerText="can't exeed than 100 % ";
		<?php $_SESSION['invalid_hsc']=1; ?>

	}
	else
	{
				<?php $_SESSION['invalid_hsc']=0; ?>

		document.getElementById("hscmarkserror").innerText="";
	}
	
	
	

	var c=Number(x);
	if (!c)
	{
		document.getElementById("hscmarkschar").innerText="only numbers allowed ";
		<?php $_SESSION['invalid_hsc']=1; ?>

	}
	else if ( c == "" )
	{
		<?php $_SESSION['invalid_hsc']=0; ?>

var cknks=0;
	}
	else
	{
		<?php $_SESSION['invalid_hsc']=0; ?>

		document.getElementById("hscmarkschar").innerText="";
	}
}

//degree

function myFunction3() {

var x=document.getElementById("degmarks").value; 
    
	
	
	
	if (x > 100)
	{
		<?php $_SESSION['invalid_grad']=1; ?>

document.getElementById("degreeerror").innerText="can't exeed than 100 % ";

	}
	else
	{
				<?php $_SESSION['invalid_grad']=0; ?>

		document.getElementById("degreeerror").innerText="";
	}
	
	
	

	var c=Number(x);
	if (!c)
	{
				<?php $_SESSION['invalid_grad']=1; ?>

		document.getElementById("degreeechar").innerText="only numbers allowed ";

	}
	else if ( c == "" )
	{
		var cknks=0;
				<?php $_SESSION['invalid_grad']=0; ?>

	}
	else
	{
		<?php $_SESSION['invalid_grad']=0; ?>

		document.getElementById("degreeechar").innerText="";
	}
	

}

//post

function myFunction4() {

	var x=document.getElementById("postmarks").value; 
    
	
	
	
	if (x > 100)
	{
				<?php $_SESSION['invalid_postn']=1 ?>

		document.getElementById("posterror").innerText="can't exeed than 100 % ";

	}
	else
	{

		document.getElementById("posterror").innerText="";

	}
	
	
	

	var c=Number(x);
	if (!c)
	{
		document.getElementById("postchar").innerText="only numbers allowed ";
				<?php $_SESSION['invalid_postc']=1 ?>

	}
	else if ( c == "" )
	{
		var cknks=0;

	}
	else
	{

		document.getElementById("postchar").innerText="";

	}


	
}
</script>
</html>
