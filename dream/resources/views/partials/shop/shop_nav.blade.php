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

       @if ($shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery'||$shop->shop_type=='public')
        <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Categories<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categories as $category)
              <li class="dropdown">
                <a href="/shop/{{$shop->slug}}/category/{{$category->category}}">{{$category->category}}</a>
              </li>

              @endforeach
              </ul>
             </div>
              
        </li>
        <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Brands<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($brands as $brand)
              <li>
                <a href="/shop/{{$shop->slug}}/brand/{{$brand->brand}}">{{$brand->brand}} </a>
              </li>
              @endforeach
              </ul>
             </div>
              
        </li>
        
        @elseif($shop->shop_type=='books')
         <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Subjects<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categories as $category)
              <li class="dropdown">
                <a href="/shop/{{$shop->slug}}/category/{{$category->category}}">{{$category->category}}</a>
              </li>

              @endforeach
              </ul>
             </div>
              
        </li>
         <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Publishers<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($brands as $brand)
              <li>
                <a href="/shop/{{$shop->slug}}/brand/{{$brand->brand}}">{{$brand->brand}} </a>
              </li>
              @endforeach
              </ul>
             </div>
              
        </li>
        @elseif($shop->shop_type=='furniture')
         <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Categories<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categories as $category)
              <li class="dropdown">
                <a href="/shop/{{$shop->slug}}/category/{{$category->category}}">{{$category->category}}</a>
              </li>

              @endforeach
              </ul>
             </div>
              
        </li>
        <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Brands<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($brands as $brand)
              <li>
                <a href="/shop/{{$shop->slug}}/brand/{{$brand->brand}}">{{$brand->brand}} </a>
              </li>
              @endforeach
              </ul>
             </div>
        </li>
        @elseif($shop->shop_type=='hotel')
        <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Rooms<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categories as $category)
              <li>
                <a href="/shop/{{$shop->slug}}/brand/{{$category->category}}">{{$category->category}} </a>
              </li>
              @endforeach
              </ul>
             </div>
        </li>
        @endif


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
        <form class="navbar-form navbar-right" role="search" action="/shop/{{$shop->slug}}/search" method="get">
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