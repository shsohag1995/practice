  <!---------Start shop menu ------------------------->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" id="shopnavbar" data-toggle="collapse" data-target="#shopNavbar">
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>
        <span class="icon-bar btn-primary"></span>                        
      </button>
      <ul class="nav navbar-nav ">
        <li><a href="{{url('/')}}"  style="float: left;">
          <span class="glyphicon glyphicon-hand-left">Shops</span>
        </a></li>
        <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Category<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categories as $category)
              <li class="dropdown">
                <a href="/shop/{{$shop->id}}/category/{{$category->category}}">{{$category->category}}</a>
              </li>

              @endforeach
              </ul>
             </div>
              
        </li>
         <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Brand<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($brands as $brand)
              <li>
                <a href="/shop/{{$shop->id}}/brand/{{$brand->brand}}">{{$brand->brand}} </a>
              </li>
              @endforeach
              </ul>
             </div>
              
        </li>
      </ul>
      
    </div>
    <div class="collapse navbar-collapse" id="shopNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/shop/{{$shop->slug}}">Home</a></li>
        <li><a href="/shop/{{ $shop->slug}}/notice">Notice</a></li>
         @if($shop->type=='Private')
        <li><a href="/shop/{{$shop->slug}}/contact">Contact</a></li>
        <li><a href="/shop/{{$shop->slug}}/address">Location</a></li>
         @endif
      </ul>
      

      <ul class="nav navbar-nav navbar-right">
        @if($shop->mode=='Premium')
        <li><a href=""  style="float: left;padding-left: 10px;">
          More-<span class="glyphicon glyphicon-hand-right"></span>
        </a></li>
        @endif
      </ul>
     <ul>
        <form class="navbar-form navbar-right" role="search" action="/shop/{{ $shop->id }}/search" method="get">
        @csrf
        <div class="form-group input-group">
          <input type="text" required name="value" class="form-control" style="margin-left: 10px;" placeholder="Search ....">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name="submit" value="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      </ul>
    </div>

  <!------------------------------------end Shop Menu----------------------------->