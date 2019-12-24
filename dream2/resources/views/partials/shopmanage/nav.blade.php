<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar btn-primary"></span>
            <span class="icon-bar btn-primary"></span>
            <span class="icon-bar btn-primary"></span>
          </button>
          <ul class="nav navbar-nav">
          <li><a class="" href="/shop/{{$shop->slug}}">Home</a></li>
        </ul>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/shopmanage/{{$shop->id}}">Dashboard</a></li>
            <li><a href="">Inbox</a></li>
            <li><a href="">Notification</a></li>
            <li><a href="">Order</a></li>
            <li><a href="">Products</a></li>
            @if($shop->mode=='Premium')
            <li><a href="">Admin</a></li>
            @endif
            <li><a href="/shop/{{$shop->id }}/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add my product </a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Welcome, {{Auth::user()->first_name}}</a></li>
            <li><a class="btn btn-default" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>
                                        {{ __('Logout') }}
                                    </a>
                                  </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </ul>
        </div><!--/.nav-collapse -->
