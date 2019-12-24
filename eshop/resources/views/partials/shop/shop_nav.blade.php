  <!---------Start shop menu ------------------------->
  <nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" id="shopnavbar" data-toggle="collapse" data-target="#shopNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <ul class="nav navbar-nav ">
        <li><a href="markets2.php"  style="float: left;">
          <span class="glyphicon glyphicon-hand-left">Shops</span>
        </a></li>
        <li style="padding:10px; float: left;">
            <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">PRODUCTS<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown">
                <a href="{{route('shop-product')}}">Category <span class="caret"></span></a>
                <ul class="dropdown-menu dropdownhover-right">
                   <li><a href="#">Type 1</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Type 2</a></li>
                   <li class="divider"></li>
                </ul>
              </li>
             </div>
        </li>
      </ul>
      
    </div>
    <div class="collapse navbar-collapse" id="shopNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('shop-index')}}">Home</a></li>
        <li><a href="shop/message.php">message</a></li>
        <li><a href="shop/notice.php">Notice</a></li>
        <li><a href="{{ route('shop-contact')}}">Contact</a></li>
        <li><a href="shop/address.php">Address</a></li>
        <li><a href="shop/manage/index.php">Manage Shop</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">5<span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="https://www.youtube.com"  style="float: left;">
          More-<span class="glyphicon glyphicon-hand-right"></span>
        </a></li>
        
      </ul>
    </div>
</nav>
<div style="padding-top: 75px;">

  <!------------------------------------end Shop Menu----------------------------->