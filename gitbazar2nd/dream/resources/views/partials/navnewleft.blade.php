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
                          <a href="{{url('/')}}" class="nav-link">
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
                          <a href="{{url('/shop')}}" class="nav-link">
                              <i class="nav-icon fa fa-hotel"></i>
                              <p>
                                  Hotels
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{{url('/shop')}}" class="nav-link">
                              <i class="nav-icon fa fa-shopping-bag"></i>
                              <p>
                                 Shops
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{{url('/home')}}" class="nav-link">
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
