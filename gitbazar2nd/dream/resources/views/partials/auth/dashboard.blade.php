<div class=" navbar-header">
      <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>                        
      </button>
      <button type="button" class="btn btn-default" style="float: left; border: none;" id="navbar-toggle1" data-toggle="collapse" data-target="#mynavbar1">
        <img src="{{asset('images/logo.png')}}" style="height: 36px !important">
      </button>
       
      <div  style="float: left; margin-left: 10px;">
       <a class="navbar-brand " href="{{ url('/home') }}">Home</a>
        <a class="navbar-brand " href="{{ url('/') }}">Bazar</a>
        <a class="navbar-brand " href="{{url('/contact')}}"><span class="glyphicon glyphicon-question-sign"></span></a>
      </div>
        
  </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
         
      <ul class="nav navbar-nav navbar-right ">
         <li><a  href="/dashboard">Dashboard</a></li>
        
        <li><a href="/myshops">Myshops</a></li>
         <li><a href="/wishlist">Wishlist</a></li>
             <li><a href="/order"></span>Order</a></li>
             <li><a href="/booking"></span>Hotel Booking</a></li>
             <li><a href="/products">Products</a></li>
            <li><a href="/event"></span>Event</a></li>
      
        {{-- <li><a  href="/profile"></span>{{ Auth::user()->first_name }}</a></li>--}}

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
    