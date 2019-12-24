<div class=" navbar-header">
      <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>                        
      </button>
      <button type="button" class="btn btn-default" style="float: left; padding: 0px;margin: 0px; margin-top:15px;" id="navbar-toggle1" data-toggle="collapse" data-target="#mynavbar1">
        <span class="glyphicon glyphicon-globe"></span>MN
      </button>
              
      
      <div class="collapse navbar-collapse" id="mynavbar1" style="float: left; margin-left: 10px;">
       <a class="navbar-brand " href="{{ url('/home') }}">Home</a>
        <a class="navbar-brand " href="{{ url('/ceo/dashboard') }}">Dashboard</a>
        
        <!--<a class="navbar-brand " href="" ><span class="glyphicon glyphicon-envelope"><span class="badge " style="background: red;">11</span></span></a>
         <a class="navbar-brand " href=""><span class="glyphicon glyphicon-bell"><span class="badge" style="background: red;">25</span></span></a>
        <a class="navbar-brand " href=""><span class="glyphicon glyphicon-question-sign"></span></a>-->

      </div>
        
  </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
         
      <ul class="nav navbar-nav navbar-right ">

        <li><a  href="profile.php"><span class="glyphicon glyphicon-user"></span>{{ Auth::user()->first_name }}</a></li>
        <li class="dropdown" style="padding:10px; float: left;">
        <button class="btn btn-default dropdown-toggle"type="button" data-toggle="dropdown">Create
       <span class="caret"></span></button>
      <ul class="dropdown-menu">
        
        
        <li><a href="{{url('userrole/create')}}">Create User Role</a></li>
        <li class="divider"></li>
        <li><a href="{{url('shoptype/create')}}">Create Shop Type</a></li>
        <li class="divider"></li>
        <li><a href="#">Add Country</a></li>
        <li class="divider"></li>
        <li><a href="#">Add State</a></li>
        <li class="divider"></li>
        <li><a href="#">Add District</a></li>
        <li class="divider"></li>
        <li><a href="#">Add City</a></li>
        <li class="divider"></li>
        
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
    
  </div>
</nav>
<div style="padding-top: 50px;">
