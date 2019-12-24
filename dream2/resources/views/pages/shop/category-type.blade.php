@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

 <!-----------------Start Shop header------------------------------------------>
 <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">{{$category}}<span> >> {{$tpe}}</span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                  @foreach($types as $type)
                  <li><a href="/shop/{{$shop->id}}/category/{{$category}}/type/{{$type->type}}">{{$type->type}}</a></li>
                  <li class="divider"></li>
                  @endforeach
            </ul>
          </div>

  <!---------------------end shope header--------------------->
 <hr style="margin: 5px;">
 

<div class="container">    
  <div class="row">
    
@foreach($products as $product)

<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-6"style="float: left; ">{{$product->title}} </div>
              <div class="col-sm-4"style="float: left; ">{{$product->export_price}} ৳</div>
              <div class="col-sm-2"style="float: left; "><a href="/shop/{{$shop->id}}/product/{{$product->slug}}" class=""><span class="glyphicon badge">More</span></a></div>
              
            </div>
            
          </div> 
        </div>
        <div class="panel-body"><img src="{{asset('images/products/t1.jpg')}}" class="img-responsive" style="width:100%;max-height: 350px;" alt="Image"></div>
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              
              
              @if($shop->mode=='Premium')
              <div  class="col-sm-3"style="float: left;"><a href="" class="btn btn-primary btn-sm"><span class="glyphicon  badge">Details</span></a></div>
              @endif
              <div class="col-sm-3">
                
              </div>
              
              <div  class="col-sm-3"style="float: left;"><a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
           
              @if(Auth::check())
              @if($shop->type=='Private')
              @if($ok==1)
              <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                              <li><a href="#">Edit</a></li>
                                 <li><a href="#">Hiden</a></li>
                                    
                                 </ul>
                                 @endif
              @elseif($shop->type=='Public')

                    @if($ok==1)

                    @endif

              @endif
              @endif
            </div>
          </div>
       </div>
      </div>
    </div> 
@endforeach
{{$products->links()}}
  </div>
</div>
<!-----------------------------sllide show  Start------------->
    


@endsection