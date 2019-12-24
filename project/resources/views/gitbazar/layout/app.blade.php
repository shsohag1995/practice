
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>GitBazar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png"  sizes="56x56">
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
    @guest

     @include('partials.auth.navnew')
     @include('partials.navnewleft')
    
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- main sidebar right-->
    
     @else
     @include('partials.auth.navnew')
     @include('partials.auth.navnewright')
    <!-- nav right end -->
    @endguest
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          @yield('content')
          
      </div>
      <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->

     
    <!-- Control Sidebar -->
    <!-- nav new left sidebar -->
    @guest
    
    @include('partials.navnewright')
    @else

    @include('partials.auth.navnewleft')

    @endguest
    <!-- nav new left sidebar -->
    <!-- /.control-sidebar -->


    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything what you want ?
        </div>
        <!-- Default to the left -->
        <strong>Starting from 2017-2019 <a href="www.gitbazar.com">Gitbazar</a>.</strong> 
    </footer>
</div>
<!-- ./wrapper -->




<script src="{{asset('js/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

<!--New js file include-->

<script src="{{asset('js/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/js/gitbazar_root.js')}}"></script>
<script src="{{asset('js/js/main.js')}}"></script>

</body>

</html>

