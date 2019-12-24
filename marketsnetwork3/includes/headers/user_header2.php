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
      <a class="navbar-brand " href="index2.php"><span class="glyphicon glyphicon-globe"></span>MN</a>
      <form class="navbar-form navbar-right" role="search" action="search.php" method="POST">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search friends....">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>

          </span>

        </div>
      </form>
       <a class="navbar-brand " href="index2.php">Home</a>
        <a class="navbar-brand " href="markets2.php">Markets</a>
        <a class="navbar-brand" id="messages" href="#"><span class="glyphicon glyphicon-envelope"><span class="badge " style="background: red;">11</span></span></a>
        <a class="navbar-brand" id="notification" href="#"><span class="glyphicon glyphicon-bell"><span class="badge" style="background: red;">25</span> </span></a>
        <a class="navbar-brand" id="question" href="#"><span class="glyphicon glyphicon-question-sign"></span></a>
 
        
        
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      
        
      <ul class="nav navbar-nav navbar-right ">

        <li><a  href="#"><span class="glyphicon glyphicon-user"></span>user name</a></li>
        <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">Create
       <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Create Shop</a></li>
        <li><a href="#">Creat addvertisement</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
        </li>
      <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">Shop List
       <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Create Shop</a></li>
            <li><a href="#">Creat addvertisement</a></li>
            <li><a href="#">JavaScript</a></li>
          </ul>
      </li>
      <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">
       <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><p> My Shop List:</p>
              <ul>
                <li><a href="#">My Shop 1</a></li>
                <li><a href="#">My Shop 2</a></li>
                <li><a href="#">My Shop 3</a></li>
              </ul>
            </li>
            <li><a href="#">Manage addvertise</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Sitting</a></li>
          </ul>
      </li>
        
        <li><a class="navbar-brand" id="logout" href="index.php"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
      </ul>
      
    </div>
    
  </div>
</nav>