<!DOCTYPE html>
<?php 
require('isloggedin.php');

?>

<html>
<head>
  <title></title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<style>
body{
  background-color: black;
  background-size:100% 100%;
  background-attachment: fixed;
  background-repeat:no-repeat;
  font-family: 'Open Sans', sans-serif;
  padding-bottom: 40px;
}
    .margin-top-20{
  margin-top: 20px;
}
body{
  background:url('https://wallpapersin4k.net/wp-content/uploads/2016/11/Dark-Blue-Backgrounds-Wallpapers-7.jpg');
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
/*for radios & checkbox labels*/
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

/*Form buttons*/
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
  <div class="container auth">
    <div id="big-form" class="well auth-box">
 <form action="savehr.php" method="post">
     <p>
      <label>Company Name:</label>
      <input class="w3-input" type="text" name="name" required=True></p>
      <p>

   <p>
      <label>Head Quarter of Company :</label>
      <input class="w3-input" type="text" name="address" required=True></p>
      <p>

     <p>
      <label>Website:</label>
      <input class="w3-input" type="text" id="website" onfocusout="myFunctionweb()" name="website" required=True></p>
      <p>	 
        <p>
      <label>Description:</label>
      <input class="w3-input" type="text" name="Description"  required=True></p>
      <p>  

        <p>
	       <strong><lable>Recruiter details:</lable> 
					<lable>Contact</lable></strong>
          <input class="w3-input"  type="text" name="contact" required="True" id="number" onkeyup="myFunction()" > </p>
					<div id="error"></div>
					<div id="char"></div>
   
       <input class="btn btn-default" type="submit"></p>

</form>
</div>
</div>
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

