<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/gitbazar_root.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/style.css')}}">

  <meta name="theme-color" content="#fafafa">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Add Main content here -->
  <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar fixed-top navbar-expand bg-white navbar-light border-bottom">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{ url('/')}}" class="nav-link"><i class="fa fa-home"></i> Home</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block dropdown">
                  <a href="#" title="Quick Help" class="nav-link" data-toggle="dropdown"><i class="fa fa-question-circle"></i></a>
                  <div class="dropdown-menu dropdown-menu-lg">

                      <a href="{{ url('/contact') }}" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="images/logo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Go for quick help ?
                                    <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                                </h3>
                                
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>

                  </div>
              </li>
          </ul>


          <!-- SEARCH FORM -->
          <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                          <i class="fa fa-search"></i>
                      </button>
                  </div>
              </div>
          </form>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
           
              
              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <b><i class="fa fa-shopping-basket"></b></i>
                      
                      
                  </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

             <div class="card card-info">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              
            </div>
            <!-- /.card -->
                  <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('images/logo.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                   product name
                                    <span class="float-right text-sm text-danger"><i class="fa fa-remove"></i></span>
                                </h3>
                                <p class="text-sm">Shoping product list</p>
                                
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    
                    
                    <a href="#" class="dropdown-item dropdown-footer">See all shoping list</a>
                     
                </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                      <b><i class="fa fa-heart"></b></i>
                      
                  </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

             <div class="card card-info">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              
            </div>
            <!-- /.card -->
                  <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('images/logo.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                   product name
                                    <span class="float-right text-sm text-danger"><i class="fa fa-remove"></i></span>
                                </h3>
                                <p class="text-sm">Shoping product list</p>
                                
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    
                    
                    <a href="#" class="dropdown-item dropdown-footer">See all wishlist list</a>
                     
                </div>
              </li>
              
              
              <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                          class="fa fa-th-large"></i></a>
              </li>
          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="{{url('/')}}" class="brand-link">
              <img src="{{asset('images/logo.png')}}" alt="My Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8">
              <span class="brand-text font-weight-light">GitBazar</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->

                     
                      <li class="nav-item ">
                          <a href="{{url('/)}}" class="nav-link">
                              <i class="nav-icon fa fa-home"></i>
                              <p>Home</p>
                          </a>
                      </li>

                      <li class="nav-item has-treeview ">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fa fa-calendar"></i>
                              <p>
                                  Entertainment
                                  <i class="right fa fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="#" class="nav-link active">
                                      <i class="fa fa-calendar-plus-o nav-icon"></i>
                                      <p>Event</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fa fa-gamepad nav-icon"></i>
                                      <p>Game</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fa fa-newspaper-o nav-icon"></i>
                                      <p>News</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fa fa-television nav-icon"></i>
                                      <p>TV</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <p class="nav-link no-">
                              Market
                          </p>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fa fa-hotel"></i>
                              <p>
                                  Hotels
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fa fa-shopping-bag"></i>
                              <p>
                                 Shops
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fa fa-product-hunt"></i>
                              <p>
                                 Products
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fa fa-question-circle"></i>
                              <p>
                                  Quick help
                              </p>
                          </a>
                      </li>

                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0 text-dark">Welcome</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <div class="content">
            <div class="container-fluid" style="min-height: 960px;">
              <div class="one_shop_slider">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="card">
                                  <div class="card-header d-flex justify-content-between p-1">
                                      <h6 class=" btn-sm bg-info-gradient mb-0 p-2"><i class="fa fa-star"></i> <span class="badge badge-light">4.5</span></h6>
                                      <a href=""><h6 class="btn btn-sm btn-outline-info mb-0 p-2">Shop name</h6></a>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="">
                                      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img class="d-block w-100" src="images/logo.png" alt="First slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-100" src="images/avater.jpg" alt="Second slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="d-flex justify-content-between">
                                      <a class="btn btn-app">
                                          <span class="badge badge-primary">9</span>
                                          <i class="fa fa-thumbs-up text-primary"></i>
                                      </a>
                                      <a class="btn btn-app">
                                          <span class="badge bg-warning">67</span>
                                          <i class="fa fa-thumbs-down text-danger"></i>
                                      </a>
                                      <a class="btn btn-app">
                                          <span class="badge bg-info">12</span>
                                          <i class="fa fa-comments text-info"></i>
                                      </a>
                                      <a class="btn btn-app mr-3">
                                          <span class="badge bg-success">531</span>
                                          <i class="fa fa-heart text-warning"></i>
                                      </a>
                                  </div>
                              </div>
                              <!-- /.card -->
                          </div>
                          <!-- /.col -->

                          <div class="col-md-6">
                              <div class="card">
                                  <div class="card-header d-flex justify-content-between p-1">
                                      <h6 class=" btn-sm bg-info-gradient mb-0 p-2"><i class="fa fa-star"></i> <span class="badge badge-light">4.5</span></h6>
                                      <a href=""><h6 class="btn btn-sm btn-outline-info mb-0 p-2">Shop name</h6></a>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="">
                                      <div id="hhhh" class="carousel slide carousel-fade" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                              <li data-target="#hhhh" data-slide-to="0" class="active"></li>
                                              <li data-target="#hhhh" data-slide-to="1"></li>
                                              <li data-target="#hhhh" data-slide-to="2"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="d-flex justify-content-between">
                                      <a class="btn btn-app">
                                          <span class="badge badge-primary">9</span>
                                          <i class="fa fa-thumbs-up text-primary"></i>
                                      </a>
                                      <a class="btn btn-app">
                                          <span class="badge bg-warning">67</span>
                                          <i class="fa fa-thumbs-down text-danger"></i>
                                      </a>
                                      <a class="btn btn-app">
                                          <span class="badge bg-info">12</span>
                                          <i class="fa fa-comments text-info"></i>
                                      </a>
                                      <a class="btn btn-app mr-3">
                                          <span class="badge bg-success">531</span>
                                          <i class="fa fa-heart text-warning"></i>
                                      </a>
                                  </div>
                              </div>
                              <!-- /.card -->
                          </div>
                          <!-- /.col -->
                      </div>


                  
              </div><!-- /.container-fluid -->

          </div>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


      <!-- Control Sidebar -->
      <aside class="control-sidebar card elevation-4">

          
              
  
          <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link btn btn-info active" data-toggle="tab" href="#login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-info" data-toggle="tab" href="#register">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-info" data-toggle="tab" href="#offers">Offers</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="login" class="container tab-pane active"><br>
      <h3>Login</h3>
      <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remamber me</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info ">Submit</button>
                </div>
              </form>
              <div class="form-group">
              </div>
              <div class="content">
              <div class="container-fluid">
            
                 <div class=" card card-info">
                  <div class="card-body">
                    <h>This is a new add .</h>
                    <img src="img/logo.png" width="140" height="140">
                  </div>
                 
              
                </div>
              </div>
          </div>
              
    </div>
    <div id="register" class="container tab-pane fade"><br>
      <h3>Register</h3>
       <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="fast name">Fast Name</label>
                    <input type="name" class="form-control" id="fast_name" placeholder="Enter Fast name">
                  </div>
                  <div class="form-group">
                    <label for="last name">Email address</label>
                    <input type="email" class="form-control" id="last_name" placeholder="Enter last name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remamber me</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info ">Submit</button>
                </div>
              </form>
    </div>
    <div id="offers" class="container tab-pane fade"><br>
      <h3>Offers</h3>
      <p>New client offer.</p>

      <div class="form-group">
              </div>
              <div class="content">
              <div class="container-fluid">
            
                 <div class=" card card-info">
                  <div class="card-body">
                    <h>This is a new add .</h>
                    <img src="img/logo.png" width="140" height="140">
                  </div>
                </div>
              </div>
          </div>
    </div>
        



  </div>
      </aside>
      <!-- /.control-sidebar -->


      <!-- Main Footer -->
      <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
              Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Start from z <a href="">Git Bazar</a>.</strong>.
      </footer>
  </div>
  <!-- ./wrapper -->




  <script src="{{asset( 'js/js/vendor/modernizr-3.6.0.min.js' )}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

        <!--New js file include-->

  <script src="{{asset('js/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/js/gitbazar_root.js')}}"></script>
  <script src="{{asset('js/js/main.js')}}"></script>


</body>

</html>
