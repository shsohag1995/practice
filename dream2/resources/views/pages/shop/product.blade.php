@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

<!-----------------Start Shop header------------------------------------------>
        <div class="dropdown dropdown-inline">
            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Category<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                  
                  <li><a href="#">Type 1</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Type 2</a></li>
                  <li class="divider"></li>
            </ul>
          </div>
<hr style="margin: 5px;">
  <!---------------------end shope header--------------------->
 @foreach($products as $product)

 <div class="container text-center">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-6"style="float: left; ">{{$product->title }}</div>
              <div class="col-sm-4"style="float: left; ">{{$product->export_price }} ৳</div>
              <div class="col-sm-2"style="float: left; "><a href="/shop/{{$shop->id}}/product/{{$product->slug}}" class=""><span class="glyphicon badge">More</span></a></div>
              
            </div>
            
          </div> 
        </div>
            @php $i=1; @endphp
            @foreach($product->product_images as $image)
                  @if($i>0)
        <div class="panel-body"><img src="{{asset('images/products/'.$image->image)}}" class="img-responsive" style="width:100%;max-height: 320px;" alt="Image"></div>
                   @endif

          @php $i--; @endphp
            @endforeach
           
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-3" style="margin: .05px;float: left;" > <a href="#" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-thumbs-up badge">150</span></a></div>
              <div class="col-sm-3" style="margin: .05px;float: left;"><a href="#" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">150</span></a></div>
              <div  class="col-sm-3"style="margin: .05px; float: left;"><a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Order</span></a>
              </div>
                <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                 <span class="caret"></span></button>
                  <ul id="shop_handelar" class="dropdown-menu">
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Hide</a></li>
                  </ul>

            </div>
          </div>
       </div>
      </div>
    </div> 


 @endforeach


   
    


  </div>
</div>



@endsection

<!-----------------PRODUCTS END----------------------->
