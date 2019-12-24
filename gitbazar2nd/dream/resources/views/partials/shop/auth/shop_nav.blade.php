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
                <a href="/shop/{{$shop->slug}}/category/{{$category->category}}">{{$category->category}} </a>
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
        <li><a href="/shop/{{$shop->slug}}/notice">Notice</a></li>
        @if($shop->type=='Private')
        <li><a href="/shop/{{$shop->slug}}/contact">Contact</a></li>
        <li><a href="/shop/{{$shop->slug}}/address">Location</a></li>
        @endif
         @if(($shop->user_id==Auth::user()->id) || (Auth::user()->role_id==1)||($ok==1))
        <li><a class="btn btn-default" href="/shopmanage/{{$shop->id }}">Manage</a></li>
          @elseif($shop->type=='Private')
          <li><a class="btn btn-default" href="/shop/{{$shop->slug}}/complain">Complain Box</a></li>
        @elseif($shop->type=='Public')
        <li><a class="btn btn-default" href="/shop/{{$shop->slug}}/public/product/create">Add Product</a></li>
        @endif
      </ul>

      
      <ul class="nav navbar-nav navbar-right">
        @if($shop->shop_type=='hotel')
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon  glyphicon-shopping-cart"></span><span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
            

             
           
              @foreach($wishlists as $wishlist)
               
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="{{Storage::url($wishlist->image)}}" width="35" height="35" alt="" />
                        <span class="item-info">
                            <span><a href="/shop/{{$shop->slug}}/wishlist"> {{$wishlist->product_slug}}</a></span>
                            <span>{{$wishlist->price}} tk</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <a href="/user/{{$wishlist->shop_id}}/{{$wishlist->sp_counter_number}}/wishlist/destroy" class="btn btn-xs btn-danger pull-right"><span class="glyphicon glyphicon glyphicon-trash"></span></a>
                    </span>
                </span>
              </li>
             
              <li class="divider"></li>
               
               @endforeach
              <li><a class="text-center btn btn-primary"style="margin: 10px" href="/shop/{{$shop->slug}}/wishlist">This Shop Wish List</a></li>
              <li><a class="text-center btn btn-info " style="margin: 10px" href="/wishlist">All Shops Wish List</a></li>

          </ul>
          
        </li>
         @endif
        <li>  </li>
        @if($shop->mode=='Premium')
        <li><a href="https://www.youtube.com"  style="float: left;">
          More-<span class="glyphicon glyphicon-hand-right"></span>
        </a></li>
        @endif
      </ul>
     
      <ul>
        <form class="navbar-form navbar-right" role="search" action="/shop/{{ $shop->slug }}/search" method="get">
        @csrf
        <div class="form-group input-group">
          <input type="text" required name="value" class="form-control" style="margin-left: 10px;" placeholder="Search ....">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      </ul>
    </div>


  <!------------------------------------end Shop Menu----------------------------->