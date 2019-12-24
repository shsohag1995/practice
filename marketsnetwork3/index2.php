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
      <form class="navbar-form navbar-right" role="search" action="search.php" method="POST" >
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
        
        
      </ul>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
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
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status: Feeling Blue</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>     
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          <a href=""> <img src="image/shop2.jpg" class="img-rounded" height="80" width="120" alt="Avatar"></a>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well" hight="80">
            <a href="">Shop name </a>
            <p> location: Just Forgot that I had to mention fvdshf fgvhdsfs sdfshghasdfh fsggsahfg gjhhjdfsg hgfdhsghj hgafhsdhfshf ahsfhfhjdash hgahgjhdfngj hhgfvajkhhghg hsghadhg something about some</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bo</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>