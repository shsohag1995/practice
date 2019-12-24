<?php
require("includes/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/js/main.js"></script>
</head>
<body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand " href="index.php"><span class="glyphicon glyphicon-globe"></span>MN</a>
      <a class="navbar-brand " href="index.php">MarketsNetwork</a>
      <a class="navbar-brand " href="markets.php">Markets</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="" href="#" style="padding-right: 0px;">LostPassword?</a></li>
      </ul>
      <div class="container-fluid">
          <form style="padding-top: 7px;" class="form-inline navbar-right" action="index2.php">
                
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember"></label>
            </div>
           <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>Login</button>
           <a class="btn btn-default btn-social btn-facebook">
          <span class="fa fa-facebook">Facebook</span>
          </a>
          <a class="btn btn-default btn-social btn-google-plus">
          <span class="fa fa-google-plus">Google+</span>
          </a>
          

          
            <a  class="btn btn-default" href="signup.php">signup</a>
          </form>
          </div>
    </div>
  </div>
</nav>