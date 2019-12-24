@extends('layouts.shop')

@section('content')
 <div class="pld">

         <div class="product-simple-area">
            <div class="container">
              
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                    @if($ok==1)
                    <div class="container-fluid">
                      <h5>Product imge front show:</h5>
                    <form class="form-group" action="/shop/private/product/image/view/update" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                           <input type="hidden" name="shop_id" value="{{$shop->id}}">
                            <input type="hidden" name="sp_counter_number" value="{{$product->sp_counter_number}}">
                            <input type="hidden" name="ok" value="{{$ok}}">
                       @php $i=1; @endphp
                            @foreach($images as $image)
                         <label class="radio-inline navbar-brand" >
                           <input type="radio" name="image" value="{{$image->image}}"><img src="{{Storage::url($image->image)}}" alt=""style="width: 20px;height: 25px;float: left; "> 
                         </label>
                          
                           @php $i++; @endphp
                           @endforeach
                            <label class="radio-inline navbar-brand" >
                            <button class="btn btn-success" type="submit" class="btn btn-default" name="save" value="create">save</button>
                            </label>
                         </form>
                       </div>
                       @endif
                     <div class="container-fluid">
                        <h3>{{$product->title}}</h3>
                     <div class="row">

                     <div class="single-product-image-inner">
                        <div class="tab-content">
                           @php $i=1; @endphp
                        @foreach($images as $image)
                           <div role="tabpanel" class="tab-pane " id="{{$i}}">
                              <img  src="{{Storage::url($image->image)}}" alt="" style="max-width: 350px;max-height: 450px;">
                           </div>
                          @php $i++; @endphp
                           @endforeach
                           
                           
                        </div>
                        </div>
                         </div>
                      
                        <div class="container-fluid">
                        <div class="row">
                        <ul class="row" role="">
                        @php $i=1; @endphp
                        @foreach($images as $image)
                           <li  class=""><a href="#{{$i}}" aria-controls="{{$i}}" role="tab" data-toggle="tab"><img  src="{{Storage::url($image->image)}}" alt=""style="width: 30px;height:40px;float: left; "></a>
                            @if($ok==1)
                            <a  href="/shopmanage/{{$shop->id}}/product/{{$product->sp_counter_number}}/image/{{$image->created_at}}/private/destroy">
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           @endif
                         </li>

                            @php $i++; @endphp
                           @endforeach
                          
                           
                        </ul>
                        </div>
                      </div>
                      @if($ok==1)
                        <div  class="col-sm-6">
                         <form class="form-group" action="/shop/private/product/images/store" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <input type="hidden" name="shop_id" value="{{$shop->id}}">
                            <input type="hidden" name="sp_counter_number" value="{{$product->sp_counter_number}}">
                            <input type="hidden" name="ok" value="{{$ok}}">
                            <label>Insert Images:</label>
                            <input class="form-group" type="file" name="images">
                            <button class="btn btn-success" type="submit" class="btn btn-default" name="create" value="create">Upload</button>
                          </form>
                        </div>
                        <div  class="col-sm-6">
                           <form class="form-group" action="" method="" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="shop_id" value="">
                            <input type="hidden" name="sp_counter_number" value="s">
                            <input type="hidden" name="ok" value="">
                            <label>Insert size:</label>
                            <input class="form-group" type="text" name="size">
                            <input class="btn btn-success" type="button" name="submit" value="Add">
                          </form>
                        </div>
                        @endif
                     </div>
                  </div>

                  <div class="clearfix visible-xs"></div>
                  <div class="col-md-offset-1 col-md-5 col-sm-6">
                     <div class="single-product-details">
                        <div class="list-pro-rating">

                        </div>
                        <div >
      <h3>Product ID:{{$product->id}}</h3>
       @if($product->quantity)
      <h4>In stock</h4>
      @else
      <h4>Is not  stock</h4>
      @endif
        <h3> Catagory:{{$product->category}}</h3>
        <h3> Type:{{$product->type}}</h3>
        
        <h3>Brand :{{$product->brand}}</h3>
       
        <h5>Product Price:{{$product->price_bdt}}</h5>
        <form>
          <input type="hidden" name="shop_id" value="">
           <input type="hidden" name="sp_counter_number" value="s">
                      <p class="single-shop-select">
                           <label>Select Image</label>
                           <div class="col-sm-12">
                             @php $i=1; @endphp
                            @foreach($images as $image)
                         <label class="radio-inline navbar-brand" >
                           
                           <input type="radio" name="shop_type" value="bakery"><img src="{{Storage::url($image->image)}}" alt=""style="width: 20px;height: 25px;float: left; ">
                           
                         </label>
                          
                           @php $i++; @endphp
                           @endforeach
                        </div>
                        </p>
                        <p class="single-shop-select">
                           <label>Size</label>
                           <select name="Size">
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="X">X</option>
                              <option value="XL">XL</option>
                              <option value="2X">2X</option>
                              <option value="3X">3X</option>
                           </select>
                           @if($ok==1)
                           <a  href="">S
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           <a  href="">M
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           <a  href="">X
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           <a  href="">XL
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           <a  href="">2X
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           <a  href="">3X
                           <span class="glyphicon glyphicon glyphicon-trash"></span>
                           </a>
                           @endif
                        </p>
                        
         <label>Quantity:</label>
          <input class="form-group" type="number" value="1" name=""><span>  {{$product->unit}} ({{$product->quantity}} {{$product->unit}} available)</span> 
          
          <div>
          <button class="btn btn-primary" type="submit">Add To WishList</button>
          
          @if($product->quantity)
          <button class="btn btn-success " type="submit" name="Submit" >Buy Now</button>
          @endif
          </div>
          
       </form>
        
       
       
</div>
                        
                        
                        <div class="single-product-categories">
                           <label>Categories:</label>
                           <span>FootwearMen's > FootwearCasual > ShoesClarks > Casual</span>
                           <div class="clear"></div>
                           <label>Services:</label>
                           <span>Cash On Delivery available?</span>
                           <div class="clear"></div>
                           <label>Categories:</label>
                           <span>30 Days Exchange Policy?</span>
                           <div class="clear"></div>
                           <label>Payment Method</label>
                           <span>Safe and Secure Payments. Easy returns.</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <div class="p-details-tab-content section-padding-2">
                        <div class="p-details-tab">
                           <ul class="p-details-nav-tab" role="tablist">
                              
                              <li role="presentation" class="btn btn-default">
                                 <a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Product Description</a>
                              </li>
                              <li role="presentation" class="btn btn-info"><a href="#review" aria-controls="data" role="tab" data-toggle="tab">Review</a></li>
                              <li role="presentation" class="btn btn-success"><a href="#feedback" aria-controls="data" role="tab" data-toggle="tab">Feedback</a></li>
                           </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                           
                           <div role="tabpanel" class="tab-pane active" id="more-info">
                           
                               If you don't even need  
                              an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly


                            :If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:If you don't even need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:
                              
                             
                           </div>
                           <div role="tabpanel" class="tab-pane" id="review">
                              <form class="form-horizontal">
                                 <div id="review"></div>
                                 <h2>Write a review</h2>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-name">Your Name</label>
                                       <input type="text" name="name" value="" id="input-name" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-review">Your Review</label>
                                       <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label">Rating</label>
                                       &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                       <input type="radio" name="rating" value="1">
                                       &nbsp;
                                       <input type="radio" name="rating" value="2">
                                       &nbsp;
                                       <input type="radio" name="rating" value="3">
                                       &nbsp;
                                       <input type="radio" name="rating" value="4">
                                       &nbsp;
                                       <input type="radio" name="rating" value="5">
                                       &nbsp;Good
                                    </div>
                                 </div>
                                 <div class="buttons clearfix">
                                    <div class="pull-right">
                                       <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="feedback">
                              <blockquote>
                                 <p>Very stylish shoes.I can wear them on any attire or any occasion and also very comfortable.</p>
                                 <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                              </blockquote>
                              <blockquote class="blockquote-reverse">
                                 <p>It has a soft sole inside the shoe which Clarks calls as 'Atsu footbed' which bas several small beads on it.</p>
                                 <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                              </blockquote>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     
         <!-- Product Simple Area End -->
         <!--Related Product Area Start-->
         <div class="featured-product-area section-padding-2">
            <div class="container">
               <div class="row">
                  <div class="section-title">
                     <h2>Related  products</h2>
                  </div>
                  
               {{--   @foreach($products as $product)
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
                                 <li><a href="#">Hide</a></li>
                                    
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
--}}
                  <div class="col-lg-3 col-sm-6 hero-feature text-center">
                     <!-- Thumbnail Images -->
                     <div class="thumbnail">
                        <a href="product-detail.html?ref=designcollection" class="link-p"> <img src="image/gt4.jpg" alt=""> </a>
                        <div class="like-heart"><a  data-placement="left"> <i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                        <!-- Offer Tag-->
                        <span class="offer">New</span>
                        <div class="caption prod-caption">
                           <span class="brand animated fadeInRightShort">Junaid Jamshed&nbsp;</span>
                           <div class="pro-name"><a href="" class="animated fadeInRightShort">Blue Matching Dress May</a></div>
                           <p>
                              <!-- Price & Button -->
                           <div class="btn-group"> <a href="#" class="btn btn-default">$ 122.51</a> <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a> </div>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Space bottom -->      <div class="space-bottom"><div align="center">

</div></div>


@endsection