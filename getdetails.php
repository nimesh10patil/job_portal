
<?php 
require('isloggedin.php');

if(isset($_SESSION['invalid_getdetails']))
{
	if($_SESSION['invalid_getdetails'] == 1)
	{
		$_SESSION['invalid_getdetails']=0;
		?>
		<h1>invalid details plz feel form again :(</h1>
		
		<?php 
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<style>
		.margin-top-20{
  margin-top: 20px;
}
body{
  background-color: black;
  background-size:100% 100%;
  background-attachment: fixed;
  background-repeat:no-repeat;
  font-family: 'Open Sans', sans-serif;
  padding-bottom: 40px;
}
.auth h1{
  color:#fff!important;
  font-weight:300;
  font-family: 'Open Sans', sans-serif;
}
.auth h1 span{
  font-size:21px;
  display:block;
  padding-top: 20px;
}
.auth .auth-box legend{
  color:#fff;
  border:none;
  font-weight:300;
  font-size:24px;
}
.auth .auth-box{
  background-color:#fff;
  max-width:460px;
  margin:0 auto;
  border:1px solid rgba(255, 255, 255, 0.4);;
  background-color: rgba(255, 255, 255, 0.2);
  background: rgba(255, 255, 255, 0.2);
  margin-top:40px;
  -webkit-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  -moz-box-shadow:    0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  box-shadow:         0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: background 1s ease-in-out;
  -moz-transition: background 1s ease-in-out;
  -ms-transition: background 1s ease-in-out;
  -o-transition: background 1s ease-in-out;
  transition: background 1s ease-in-out;
}
@media(max-width:460px){
  .auth .auth-box{
   margin:0 10px;
 }
}

.auth .auth-box input::-webkit-input-placeholder { /* WebKit browsers */
  color:    #fff;
  font-weight:300;
}
.auth .auth-box input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
  color:    #fff;
  font-weight:300;
}
.auth .auth-box input::-moz-placeholder { /* Mozilla Firefox 19+ */
  color:    #fff;
  font-weight:300;
}
.auth .auth-box input:-ms-input-placeholder { /* Internet Explorer 10+ */
  color:    #fff;
  font-weight:300;
}
.auth span.input-group-addon,
.input-group-btn button{
  border:none;
  background: #fff!important;
  color:#000!important;
}
.auth form{
    font-weight:300!important;
}
.auth form input[type="text"],
.auth form input[type="password"],
.auth form input[type="email"],
.auth form input[type="search"]{
  border:none;
  padding:10px 0 10px 0;
  background-color: rgba(255, 255, 255, 0)!important;
  background: rgba(255, 255, 255, 0);
  color:#fff;
  font-size:16px;
  border-bottom:1px dotted #fff;
  border-radius:0;
  box-shadow:none!important;
  height:auto;
}
.auth textarea{
  background-color: rgba(255, 255, 255, 0)!important;
  color:#fff!important;
}
.auth input[type="file"] {
  color:#fff;
}
.auth form label{
    color:#fff;
    font-size:21px;
    font-weight:300;
}
.auth .radio label,
.auth label.radio-inline,
.auth .checkbox label,
.auth label.checkbox-inline{
    font-size: 14px;
}

.auth form .help-block{
    color:#fff;
}
.auth form select{
  background-color: rgba(255, 255, 255, 0)!important;
  background: rgba(255, 255, 255, 0);
  color:#fff!important;
  border-bottom:1px solid #fff!important;
  border-radius:0;
  box-shadow:none;
}
.auth form select option{
    color:#000;
}
/*multiple select*/
.auth select[multiple] option,
.auth select[size] {
  color:#fff!important;
}

.auth form .btn{
  background:none;
  -webkit-transition: background 0.2s ease-in-out;
  -moz-transition: background 0.2s ease-in-out;
  -ms-transition: background 0.2s ease-in-out;
  -o-transition: background 0.2s ease-in-out;
  transition: background 0.2s ease-in-out;
}
.auth form .btn-default{
    color:#fff;
    border-color:#fff;
}
.auth form .btn-default:hover{
    background:rgba(225, 225, 225, 0.3);
  color:#fff;
  border-color:#fff;
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
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: white;
    color: white;
}
.error{
  color:red;

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
<br>
<br>
<div class="container auth">
    <div id="big-form" class="well auth-box">
    	<div class="form-group ">
<div class="">
    <form action="save.php" method="post">

        <p>

      <label>Contact:</label>
      <input class="in" type="text" onkeyup="myFunction()" name="contact" id="number"  required=True></p>
					<div  class="error">*Required</div><br>
	  
					<div class="error" id="error"></div><br>
					<div  class="error" id="char"></div></p>
	  				
	  					<p><label>SSC Marks : </label><input type="text" required="True"name="ssc" id="sscmarks" onkeyup="myFunction1()" ></p>
	  					<div  class="error">*Required</div><br>
					
					<div id="sscmarkserror" class="error"></div><br>
					<div class="error" id="sscmarkschar"></div></p>
					
					<p><label>SSC School : </label> <input type="text" name="ssc_s" required="True"  ></p>

					<div  class="error">*Required</div><br>
					<p><label>HSC Marks : </label><input type="text" required="True" name="hsc" id="hscmarks" onkeyup="myFunction2()" ></p>
					<div  class="error">*Required</div><br>
					<div id="hscmarkserror" class="error"></div><br>
					<div class="error" id="hscmarkschar"></div></p>
					
					<p><label>HSC College : </label> <input type="text" required="True" name="hsc_s" > </p>
					<div  class="error">*Required</div><br>
						  <select name="graduation" required=True>

        <option value="">Graduation : </option>

		<option value="BE">B.E</option>
	    <option value="MBA">MBA</option>
		<option value="BSC-it">BSC-it</option>
		<option value="bsc">BSC</option>

 
 </select>
 
 				  <select name="graduation_b" required=True>
        <option value="">branch</option>

		<option value="computer">computer</option>
	    <option value="electical">electical</option>
		<option value="mechanical">mechanical</option>
		<option value="maths">maths</option>

 
 </select>
					
					<div  class="error">*Required</div><br>
					<p><label>graduation from </label> <input type="text" required="True" name="graduation_s"> </p>
										<div  class="error">*Required</div><br>
					<p><label>graduation Marks </label> <input type="text" name="graduation_marks" required="True" id="degmarks" onkeyup="myFunction3()" > </p>
					
					<div class="error" id="degreeerror"></div><br>
					<div class="error" id="degreeechar"></div></p>
					<div  class="error">*Required</div><br>

					  <select name="postgraduation" >
        <option value="postgraduation">post graduation</option>

	<option value="ME">M.E</option>
	    <option value="MTECH">M. Tech</option>
 <option value="MBA">MBA</option>
 
 </select>


 				  <select name="post_graduation_b" >
        <option value="">branch</option>

		<option value="computer">computer</option>
	    <option value="electical">electrical</option>
		<option value="mechanical">mechanical</option>
		<option value="maths">maths</option>

 
 </select>

 
 					<p><label>post graduation from </label> <input type="text"  name="postgraduation_s"> </p>

 					<p><label>post graduation Marks </label> <input type="text" name="postgraduation_marks" id="postmarks" onkeyup="myFunction4()" > </p>

					<div id="postmarkserror" class="error"></div><br>
					<div id="postmarkschar" class="error"></div></p>
					
					<p><label>experience at </label> <input type="text" name="experience_at" > </p>
					
										<p><label>experience in months </label> <input type="number" name="experience_of" > </p>

					
					
					
					<p><label>Address</label> <input type="text"  name="address" required="True"></p>
					
					
					
					
					
					
	  
	  
	  
		<p>	  
		</p>
	</p>
</div>
</div>


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
      <input class="btn btn-default" type="submit"></p>
</form>
</h1>
</div>
</div>
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

		document.getElementById("postmarkserror").innerText="can't exeed than 100 % ";

	}
	else
	{

		document.getElementById("postmarkserror").innerText="";

	}
	
	
	

	var c=Number(x);
	if (!c)
	{
		document.getElementById("postmarkschar").innerText="only numbers allowed ";
				<?php $_SESSION['invalid_postc']=1 ?>

	}
	else if ( c == "" )
	{
		var cknks=0;

	}
	else
	{

		document.getElementById("postmarkschar").innerText="";

	}


	
}
</script>
	 
</html>

