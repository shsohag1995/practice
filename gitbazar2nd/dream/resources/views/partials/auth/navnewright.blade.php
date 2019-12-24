<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/') }}" class="brand-link">
            <img src="{{asset('images/logo.png')}}" alt="My Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">GitBazar</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" >
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                   <li class="nav-item ">
                        <a href="{{ url('/') }}" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <div class="image ">
                                <img src="images/avatar.png"  class="img-circle elevation-2 float-left img-fluid" width="20" alt="User Image">
                            </div>
                            <p class="ml-3">
                                {{Auth::user()->first_name}}
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/profile') }}" class="nav-link">
                                    <i class="fa fa-user-secret nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/shops') }}" class="nav-link">
                                    <i class="fa fa-plus-square-o nav-icon"></i>
                                    <p>Shops</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">
                                    <i class="fa fa-balance-scale nav-icon"></i>
                                    <p>Balance</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/booking') }}" class="nav-link">
                                    <i class="fa fa-hotel nav-icon"></i>
                                    <p>Booking</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/order') }}" class="nav-link">
                                    <i class="fa fa-shopping-basket nav-icon"></i>
                                    <p>Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/myshops') }}" class="nav-link">
                                    <i class="fa fa-shopping-bag nav-icon"></i>
                                    <p>My Shops</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-link nav-icon"></i>
                                    <p>My Link</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-comments-o"></i>
                            <span class="badge badge-danger navbar-badge">1</span>
                            <p>Message</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-bell-o"></i>
                              <span class="badge badge-warning navbar-badge">1</span>
                            <p>Notification</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-plus"></i>
                            <p>
                                Create
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a title="Create advertise your products,brand,shop ." href="#" class="nav-link ">
                                    <i class="fa fa-bullhorn nav-icon"></i>
                                    <p>Advertise</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Create event for planned and organized occasion for  gathering together" href="#" class="nav-link ">
                                    <i class="fa fa-calendar-plus-o nav-icon"></i>
                                    <p>Event</p>
                                </a>
                            </li>
                             <li title="Create shop for Contact and sell your products to customer ." class="nav-item">
                                <a   href="{{ url('/myshop/create') }}" class="nav-link">
                                    <i class="fa fa-shopping-bag nav-icon"></i>
                                    <p>Shop</p>
                                </a>
                            </li>
                            
                        </ul>
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
                                <a href="#" class="nav-link ">
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
                        <a href="{{ url('/shop') }}" class="nav-link">
                            <i class="nav-icon fa fa-hotel"></i>
                            <p>
                                Hotels
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/shop') }}" class="nav-link">
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
