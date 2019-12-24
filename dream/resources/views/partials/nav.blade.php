 
  
    <div class=" navbar-header">
      <button type="button" class="navbar-toggle" id="navbar-toggle1" data-toggle="collapse" data-target="#guestmenu">
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>                        
      </button>
      <button type="button" class="btn btn-default" style="float: left; border: none;">
        <img src="{{asset('images/logo.png')}}" style="height: 36px !important">
      </button>
      <a class="navbar-brand " style="margin-left: 1px;" href="{{ url('/') }}">Bazar</a>
      <a class="navbar-brand " href="{{ url('/contact') }}"><span class="glyphicon glyphicon-question-sign"></span></a>
    </div>
    
    <div class="collapse navbar-collapse" id="guestmenu">
      <div class="container-fluid">
          <form style="padding-top: 7px;" class="form-inline navbar-right" method="GET" action="{{ url('/search') }}">
            @csrf
                <div class="form-group input-group">
                  <input type="hidden" name="searchtype" value="market">
                <input type="text" required name="name" class="form-control" style="margin-left: 1px;" placeholder="Enter shop name....">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
               </button>
               </span>
               </div>
            
           
           <!--<a class="btn btn-default btn-social btn-facebook">
          <span class="fa fa-facebook">Facebook</span>
          </a>
          <a class="btn btn-default btn-social btn-google-plus">
          <span class="fa fa-google-plus">Google+</span>
          </a>-->
            <a class="btn btn-default" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>{{ __('Login') }}</a>
            @if (Route::has('register'))
             <a class="btn btn-default" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
          </form>
          </div>
    </div>
 

  
