<aside class="main-sidebar card navbar-light elevation-4">
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
                        <a href="{{url('/')}}" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link no-">
                            Market
                        </p>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/hotels')}}" class="nav-link">
                            <i class="nav-icon fa fa-hotel"></i>
                            <p>
                                Hotels
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <p>
                                Shops
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/gitbazar/products')}}" class="nav-link">
                            <i class="nav-icon fa fa-product-hunt"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>
                   <li class="nav-item">
                        <p class="nav-link no-">
                           <a >Categories </a> 
                        </p>
                    </li>

                    @foreach($categories as $category)
                    @if( $category->category ==null)
                    
                    
                    @else
                     <li class="nav-item has-treeview ">
                        
                        <a href="" class="nav-link">
                            
                            <p >
                                {{$category->category}} 
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            @foreach($categorytypes as $type)
                            <li class="nav-item">
                                <a  class="nav-link">
                                     <a href="/gitbazar/products/{{$category->category}}/type/{{$type->type}}" >{{$type->type}}</a>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                  @endforeach
                   

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>