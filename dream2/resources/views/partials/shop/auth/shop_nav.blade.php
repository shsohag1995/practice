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
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">category<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
               @foreach($categories as $category)
              <li class="dropdown">
                <a href="/shop/{{$shop->id}}/category/{{$category->category}}">{{$category->category}} </a>
              </li>
              @endforeach
             </div>
              
        </li>
        <li style="padding:10px; float: left;">
            
              <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Brand<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              @foreach($brands as $brand)
              <li><a href="/shop/{{$shop->id}}/brand/{{$brand->brand}}">{{$brand->brand}} </a></li>
              @endforeach
            
             </div>

        </li>
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
        <li><a class="btn btn-default" href="/shopmanage/{{$shop->id }}">Manage Shop</a></li>
          @elseif($shop->type=='Private')
          <li><a class="btn btn-default" href="/shop/{{$shop->id }}/Complain/{{$shop->id }}">Complain Box</a></li>
        @elseif($shop->type=='Public')
        <li><a class="btn btn-default" href="/shop/{{$shop->id }}/public/product/create">Add Product</a></li>
        @endif
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 7 <span class="glyphicon  glyphicon-shopping-cart"></span> Shoping Cart<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
             <li class="divider"></li>
              <li>
                <form>
                   <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span><a href=""> Item name 1</a></span>
                            <span> 23$ </span>
                        </span>
                    </span>
                    <span class="item-right">
                        10-16-2019
                       </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-primary pull-right"><span class="glyphicon glyphicon ">pending</span></button>
                    </span>
                </span>
                </form>
              </li>
              <li class="divider"></li>
               
              <li>
                <form>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span><a href=""> Item name </a></span>
                            <span> 23$ </span>
                        </span>
                        
                    </span>
                   
                      <span class="item-right">
                        10-16-2019
                       </span>
                    
                    <span class="item-right">
                        <button class="btn btn-xs btn-info pull-right"><span class="glyphicon glyphicon ">accept</span></button>
                    </span>
                    
                </span>
                </form>
              </li>
               <li class="divider"></li>
              <li>
                <form>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span><a href=""> Item name </a></span>
                            <span> 23$ </span>
                        </span>
                        
                    </span>
                   
                       <span class="item-right">
                        10-16-2019
                       </span>
                    
                    <span class="item-right">
                        <button class="btn btn-xs btn-success pull-right"><span class="glyphicon glyphicon ">accepted</span></button>
                    </span>
                    
                </span>
                </form>
              </li>


              <li class="divider"></li>
              <p>If you get your product .Please click the accept button.</p>
              <li><a class="text-center" href="">View Shoping Cart</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 7 <span class="glyphicon  glyphicon-shopping-cart"></span> WishList<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
             <li class="divider"></li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span><a href=""> Item name 1</a></span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right"><span class="glyphicon glyphicon glyphicon-trash"></span></button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span><a href=""> Item name </a></span>
                            <span>23$</span>
                        </span>
                        
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right"><span class="glyphicon glyphicon glyphicon-trash"></span></button>
                    </span>
                </span>
              </li>

              <li class="divider"></li>
              <li><a class="text-center" href="">View Wish List</a></li>
          </ul>
        </li>
        <li>  </li>
        @if($shop->mode=='Premium')
        <li><a href="https://www.youtube.com"  style="float: left;">
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
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      </ul>
    </div>


  <!------------------------------------end Shop Menu----------------------------->