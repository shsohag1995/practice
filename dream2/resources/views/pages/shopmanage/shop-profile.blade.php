@extends('layouts.shopmanage')

@section('content')

@include('partials.shopmanage.nav2')
    
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-2
          ">
            <div class="list-group">
              <a href="/shop/{{$shop->id }}/shopmanage/{{$shop->id }}" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Shop Profile </a>
              <a href="products.php" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Products <span class="badge">33</span></a>
              @if($shop->mode=='Premium')
              <a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admins <span class="badge">20</span></a>
               @endif
               <a href="order.php" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>My Order <span class="badge">20</span></a>
              <a href="/shop/{{$shop->id }}/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add my product </a>
            </div>
            @if($shop->mode=='Premium')
            <div class="well" >
             <a href="">Make Admin</a>
           </div>
           @endif
           
            
           <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body"><img src="{{asset('images/products/t6.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image"></div>
        <div class="panel-footer">Buy NOW</div>
      </div>
          </div>
          <div class="col-md-10">
            <div class="col-md-5">
                <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body"><img src="{{ Storage::url($shop->front_image)}}" class="img-responsive" style="width:100%; max-height:200px;" alt="Image"></div>
        
        <div class="panel-footer"> <div class="content">
                <form class=" " action="/shopmanage/{{$shop->id}}/profile/image/update" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="mode1" required name="data" value="front">
                    <input type="file" name="image">
                    <input class="btn btn-success" type="submit" value="Save">
                </form>
            </div></div>

      </div>
      </div>
      <div class="col-md-5">
       <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body"><img src="{{ Storage::url($shop->right_image)}}" class="img-responsive" style="width:100%; max-height:200px;" alt="Image"></div>
        <div class="panel-footer"> <div class="content">
                <form class=" from-group " action="/shopmanage/{{$shop->id}}/profile/image/update" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="mode2" required name="data" value="right">
                    <input type="file" name="image">
                    <input class="btn btn-success" type="submit" value="Save">
                </form>
            </div></div>
      </div>
      </div>
      <div class="col-md-5">
       <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body"><img src="{{ Storage::url($shop->center_image)}}" class="img-responsive" style="width:100%; max-height:200px;" alt="Image"></div>
        <div class="panel-footer"> <div class="content">
                <form class=" " action="/shopmanage/{{$shop->id}}/profile/image/update" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="mode3" required name="data" value="center">
                    <input type="file" name="image">
                    <input class="btn btn-success" type="submit" value="Save">
                </form>
            </div></div>
      </div>
      </div>
      <div class="col-md-5">
       <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body"><img src="{{ Storage::url($shop->left_image)}}" class="img-responsive" style="width:100%; max-height:200px;" alt="Image"></div>
        <div class="panel-footer"> <div class="content">
                <form class=" " action="/shopmanage/{{$shop->id}}/profile/image/update" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   <input type="hidden" id="mode4" required name="data" value="left">
                    <input type="file" name="image">
                    <input class="btn btn-success" type="submit" value="Save">
                </form>
            </div></div>
      
      </div>
    </div>
                    
                    
            
             
              </div>
              </div>

              

          </div>
        </div>
      </div>
    </section>

    <!-- Modals -->

   
@endsection
