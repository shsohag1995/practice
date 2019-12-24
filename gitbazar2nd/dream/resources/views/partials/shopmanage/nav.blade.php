<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar btn-primary"></span>
            <span class="icon-bar btn-primary"></span>
            <span class="icon-bar btn-primary"></span>
          </button>
          <ul class="nav navbar-nav">
         
        </ul>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a class="" href="/shop/{{$shop->slug}}">Home</a></li>
            <li class="active"><a href="/shopmanage/{{$shop->id}}">Dashboard</a></li>
           {{-- <li><a href="">Inbox</a></li>
            <li><a href="">Notification</a></li> --}}
            <li><a href="/shopmanage/{{$shop->id}}/order">@if($shop->shop_type=='hotel') Booking @else Orders @endif </a></li>
            <li><a href="/shopmanage/{{$shop->id}}/products">@if($shop->shop_type=='hotel') Rooms @else Products
            @endif </a></li>
            @if($shop->mode=='Premium')
            <li><a href="">Admin</a></li>
            @endif
            @if($shop->type=='Private')
            <li><a href="/shopmanage/{{$shop->id}}/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> @if($shop->shop_type=='hotel') Add new room @else Add my product @endif </a></li>
            @else
            <li><a href="/shop/{{$shop->slug}}/public/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Add my product </a></li>
            @endif
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a>Shop ID:{{$shop->id}}</a></li>
            <li><a href="/profile">{{Auth::user()->first_name}}</a></li>
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
