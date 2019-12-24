<nav class="main-header navbar fixed-top navbar-expand bg-white  navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/') }}" class="nav-link"><i class="fa fa-home"></i> Home</a>
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
                    <i class="fa fa-shopping-basket"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
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
                    
                    
                    <a href="{{url('/wishlist')}}" class="dropdown-item dropdown-footer">See all shoping list</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <!--<li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-heart-o"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">-->
                        <!-- Message Start -->
                       <!-- <div class="media">
                            <img src="{{asset('images/logo.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                   product name
                                    <span class="float-right text-sm text-danger"><i class="fa fa-remove"></i></span>
                                </h3>
                                <p class="text-sm">Shoping product list</p>
                                
                            </div>
                        </div>-->
                        <!-- Message End -->
                   <!-- </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See all wish list</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                        class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>