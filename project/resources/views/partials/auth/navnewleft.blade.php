<aside class="control-sidebar  card  elevation-4">
     <div class=" mt-3">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link btn btn-info active" data-toggle="tab" href="#user-info">Info</a>
     </li>
     <li class="nav-item">
      <a class="nav-link btn btn-info" data-toggle="tab" href="#favorite-shops"><i class="fa fa-heart"></i> Shops</a>
     </li>
     <li class="nav-item">
      <a class="nav-link btn btn-info " data-toggle="tab" href="#my-shop">Myshop</a>
     </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="user-info" class="container tab-pane active"><br>
      
          <!-- Sidebar -->
          <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="images/avatar.png"
                         alt="User profile picture" style="width: 50px !important;" >
                </div>

                 <p  class="text-center" ><a class="text-muted text-center" class="nav-link" href=""> {{Auth::user()->first_name}}</a></p>

                <p>Status: <a href="" class="text-muted text-center " class="nav-link" >{{Auth::user()->type}}</a></p>

            
            
              <!-- Sidebar Menu -->
              <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <a class="text-muted  nav-link" href=""><i class="fa fa-balance-scale"></i>
                        <b>Balance</b></a>
                        <ul class="list-group  mb-3 mt-2">
                            <li class="list-group-item">
                                <a href="" class="text-secondary">USD :</a> <a class="float-right">{{Auth::user()->balance_usd}}</a>
                            </li>
                            <li class="list-group-item">
                                <a href="" class="text-secondary">BDT :</a> <a class="float-right">{{Auth::user()->balance_bdt}}</a>
                            </li>
                            <li class="list-group-item">
                                <a href="" class="text-secondary">CGC :</a><a class="float-right">{{Auth::user()->balance_cgc}}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a class="text-muted  nav-link" href=""><b>Referal Link</b></a>
                    </li>

                    <li class="list-group-item">
                        <a  class="text-muted nav-link" href=""><b>Advertising</b></a>
                    </li>

                    <li class="list-group-item">

                        <p><a class="text-muted  nav-link"  href=""><i class="fa fa-gear"></i> <b> Setings</b></a></p>
                    </li>
                    
                    <li  class="list-group-item" style="padding-top: 10px;">
                     <a class="text-muted  nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fa fa-power-off"></span>
                                       <b> {{ __('Logout') }}</b> 
                                    </a>

                     </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

                </ul>
          
              <!-- /.sidebar-menu -->
          </div>
      
    </div>
    <div id="favorite-shops" class="container tab-pane fade"><br>
      <h6>Favorite  shops list</h6>
                     @php $i=10; @endphp
                    @foreach($myshops as $shop)
                    @if($i>0)
                    <a href="/shop/{{$shop->shop_id}}/connecte"><span class="float-right text-sm text-danger"><i class="fa fa-remove"></i></span></a> 
                    <a href="/shop/{{$shop->shop_slug}}" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('images/logo.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                {{$shop->shop_name}}
                                    
                                </h3>
                               
                                
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    
                    @endif
                  @php $i--; @endphp
                   @endforeach
                   
                    
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/shops') }}" class="dropdown-item dropdown-footer">See All </a>
    </div>
    <div id="my-shop" class="container tab-pane fade"><br>
      <h6>My shops list</h6>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('images/logo.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                   Shop name
                                    
                                </h3>
                                <p class="text-sm">Shop info</p>
                                
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/myshops') }}" class="dropdown-item dropdown-footer">See All </a>
    </div>
  </div>
</div>
       
     
         

          <!-- /.sidebar -->
    
    </aside>