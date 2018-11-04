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
/* The container */
.con {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.con input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.con:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.con input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.con input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.con .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
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
              <a href="http://localhost/Litap/profile.php">
              <i class="glyphicon glyphicon-home"></i>
              List </a>
            </li>
            <li class="active">
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
            <div class="  profile-usertitle-name profile-content ">
         <h1 style="">Select Skills</h1>
<form action="save_skills.php" method="post">
        <br><label class="con"> C++
    <input type="checkbox" value="c++" name="skills[]" id="skills"><span class="checkmark"></span></label><br>
    <label  class="con">Python
        <input type="checkbox" value="python" name="skills[]" id="skills"><span class="checkmark"></span></label><br>
        <label class="con">Java
        <input type="checkbox" value="java" name="skills[]" id="skills"><span class="checkmark"></span></label><br>
        <label class="con">Angularjs
        <input type="checkbox" value="angularjs" name="skills[]" id="angularjs"> <span class="checkmark"></span></label><br>
        <label class="con">nodejs
        <input type="checkbox" value="nodejs" name="skills[]" id="nodejs" ><span class="checkmark"></span></label><br>
        <label class="con">C#NET 
        <input type="checkbox" value="c#NET" name="skills[]" id="c#NET"><span class="checkmark"></span></label><br>
        <label class="con">DBMS 
        <input type="checkbox" value="DBMS" name="skills[]" id="DBMS"><span class="checkmark"></span></label><br>
        <label class="con">Data Structures 
        <input type="checkbox" value="DS" name="skills[]" id="DS"><span class="checkmark"></span></label><br>
<input type="submit" class="btn btn-danger" value="add skills">
</form>

            </div>
    </div>
  </div>



</body>
</html>