<div class=" navbar-header">
      <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>                        
      </button>
      <button type="button" class="btn btn-default" style="float: left; padding: 0px;margin: 0px; margin-top:15px;" id="navbar-toggle1" data-toggle="collapse" data-target="#mynavbar1">
        <span class="glyphicon glyphicon-globe"></span>MN
      </button>
              
      <form class="navbar-form navbar-right" role="search" action="{{ url('/search') }}" method="GET">
        @csrf
        <div class="form-group input-group">
          <input type="text" required name="name" class="form-control" style="margin-left: 10px;" placeholder="Search ....">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      <div class="collapse navbar-collapse" id="mynavbar1" style="float: left; margin-left: 10px;">
       <a class="navbar-brand " href="{{ url('/home') }}">Home</a>
        <a class="navbar-brand " href="{{ url('/') }}">Markets</a>
         @if(Auth::user()->user_role_id==1)
        <a class="navbar-brand " href="" ><span class="glyphicon glyphicon-envelope"><span class="badge " style="background: white;">11</span></span></a>
         <a class="navbar-brand " href=""><span class="glyphicon glyphicon-bell"><span class="badge" style="background: white;">25</span></span></a>
         @endif
        <a class="navbar-brand " href="{{ url('/contact') }}"><span class="glyphicon glyphicon-question-sign"></span></a>
      </div>
        
  </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
         
      <ul class="nav navbar-nav navbar-right ">

        <li><a  href="profile.php"><span class="glyphicon glyphicon-user"></span>{{ Auth::user()->first_name }}</a></li>
        <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">Create
       <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Verify account</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/myshop/create') }}">Create Shop</a></li>
        <li class="divider"></li>
        @if(Auth::user()->user_role_id==1 )
        <li><a href="#">Buy Shop</a></li>
        <li class="divider"></li>
        <li><a href="#">Sell Shop</a></li>
        <li class="divider"></li>
        <li><a href="#">Create Event</a></li>
        <li class="divider"></li>
        <li class="wall"><a href="#">Create Advertise</a></li>
        <li class="divider"></li>
        <li class="wall"><a href="#">Apply for trainning</a></li>
        <li class="divider"></li>
        <li class="wall"><a href="#">Apply for jobs</a></li>
        <li class="divider"></li>
       @endif
      </ul>
        </li>
     <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">Shop List
       <span class="caret"></span></button>
          <ul class="dropdown-menu">
             @php $i=10; @endphp
               @foreach($myshops as $shop)
                @if($i>0)
                <li><a href="/shop/{{$shop->shop_slug}}">{{$shop->shop_name}}</a></li>
                <li class="divider"></li>
                @endif
                @php $i--; @endphp
                @endforeach
                <li><a href="/shop">More....</a></li>
                <li class="divider"></li>
          </ul>
      </li>
        @if(Auth::user()->user_role_id ==1)

       <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">
       {{Auth::user()->user_type}}<span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a class="btn btn-default" href="{{ url('/ceo/dashboard') }}">Dashbord</a>
             <ul>
             
                <li><a href="#">More....</a></li>
                <li class="divider"></li>

              </ul>
            </li>
          </ul>
      </li>
      @endif
      <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">{{Auth::user()->user_type}}
       <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">My Shop</a>
             <ul> 
              @php $i=5; @endphp
               @foreach($shops as $shop)
                @if($i>0)
                <li><a href="/shop/{{$shop->slug}}">{{$shop->name}}</a></li>
                <li class="divider"></li>
                @endif
                @php $i--; @endphp
                @endforeach
                <li><a href="/myshops">More....</a></li>
                <li class="divider"></li>
              </ul>
            </li>
             @if(Auth::user()->user_role_id ==1)
            <li><a href="#">Manage addvertise</a></li>
            <li class="divider"></li>
            <li><a href="#">Past Event</a></li>
            <li class="divider"></li>
            <li><a href="#">Upcoming Event</a></li>
            <li class="divider"></li>
            <li><a href="#">Present Event</a></li>
            <li class="divider"></li>
            <li> <a href="">My Event :</a> 
              <ul>
                <li><a href="#">Islamic University Pohela Baishakh</a>
                <p>From:<span class="badge">02-10-20 to 05-10-20</span></p>
                </li>
                <li class="divider"></li>
                <li><a href="#">Kushtia Business Events</a><p>From:<span class="badge">02-10-20 to 05-10-20</span></p></li>
                <li class="divider"></li>
                <li><a href="#">More...</a></li>
                <li class="divider"></li>
              </ul>
            </li> 
             @endif
             <li><a href="shoping.php">5<span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
             <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Sitting</a></li>

          </ul>
      </li>
         

        <li  class="btn-group btn-group-sm" style="padding-top: 10px;">
          <a class="btn btn-default" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>
                                        {{ __('Logout') }}
                                    </a>

          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </ul>
      
    </div>
    
  
