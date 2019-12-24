@extends('layouts.app')

@section('content')
<h5 style="text-align: center;">Wellcome to MarketsNetwork</h5>
   <nav class="navbar navbar">
  <div class="container">
    <div class="navbar-header">
      <form style="padding-top: 25px;" class="form-inline navbar-right" action="{{ url('/search') }}" method="Get">
                       @csrf

         
             <select  id="country" name="country" class="btn btn-default" style="padding: 3px; margin: 1px;max-width: 125px;">
                    <option >--Country--</option>
                     @foreach($allshops as $allshop)
                    <option value="{{$allshop->country}}">{{$allshop->country}}</option>
                    @endforeach
               </select>
               <select  id="state" name="state" class="btn btn-default"  style="padding: 3px; margin: 1px; max-width: 110px; ">
                    <option >--state--</option>
                    @foreach($allshops as $allshop)
                    <option  value="{{$allshop->state}}"  data-chained="{{$allshop->country}}">{{$allshop->state}}</option>
                    @endforeach
                    
               </select>
               <select  id="district" name="district" class="btn btn-default" style="padding: 3px; margin: 1px; max-width: 120px;">
                    <option >--District--</option>
                     @foreach($allshops as $allshop)
                    <option  value="{{$allshop->district}}"  data-chained="{{$allshop->state}}">{{$allshop->district}}</option>
                    @endforeach
                    
               </select>
               <select  id="city" name="city" class="btn btn-default" style="padding: 3px; margin: 1px;max-width: 100px;">
                    <option>--city--</option>
                     @foreach($allshops as $allshop)
                    <option  value="{{$allshop->city}}"  data-chained="{{$allshop->district}}">{{$allshop->city}}</option>
                    @endforeach
               </select>

              <select  id="shop_type" name="shop_type" class="btn btn-default" style="padding: 3px; margin: 1px; max-width: 120px;">
                    <option>--Shop Type--</option>
                    <option value="Public">Public</option>
                    <option value="Bakery shop">Bakery shop</option>
                    <option value="Books shop">Books shop</option>
                    <option value="Butcher shop">Butcher shop</option>
                    <option value="Clothes store">Clothes store</option>
                    <option value="Diagnostic center">Diagnostic center</option>
                    <option value="Drugs store">Drugs store</option>
                    <option value="Fish store">Fish store</option>
                    <option value="Grocery store">Grocery store</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Restaurent">Restaurent</option>
                    <option value="Stationery store">Stationery store</option>
                    <option value="Other">Other</option>          
               </select>
           <button type="submit" class="btn btn-default" name="shop" value="shop">Shops</button>
          </form>
        

    

    

    </div>
  </div>
</nav>
</br>
  <div class="container-fluid text-center">
    <div  class="col-md-6"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="{{asset('images/shop/s1.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image"></div>
        <div class="panel-footer">Buy NOW</div>
      </div>
    </div>


@foreach($allshops as $shop)
@if($shop->type=='Public')
<div class="col-md-6 col-sm-6" style="max-height: 250px; margin-top: 0px;">    
    <div class="card hovercard grad2">
        <div class="card-background ">

        <div class="row">
            <div class="col-lg-1 col-sm-1" style="float: left; padding: 0px;">
              <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star badge" aria-hidden="true">
                       @if($shop->type=='Public')
                       {{$shop->type}}
                       @else
                       {{$shop->star}}
                       @endif
                    </span>
                        
                    </button>
               </div>
            </div>
            
                <div class="col-lg-10 col-sm-10" style="float: left; padding: 0px;margin: 0px;">
                  <a href="/shop/{{$shop->slug}}"><button type="submit" class="btn btn-default">{{$shop->name}}</button></a>
                </div>
                
          </div>
          <!----------shop image------------------>
                 <div class="col-lg-12 col-sm-12" style="float: left; padding: 0px;margin: 0px;">
                  <h1>Wellcome To</h1>
                </div>
                 <div class="col-lg-12 col-sm-12" style="float: left; padding: 0px;margin: 0px;">
                  <h1>{{$shop->name}}</h1>
                </div>


          <!-------------shop image end------>
        </div> 
    </div>
     <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

         <a href="/shop/{{$shop->id}}/like/1" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-thumbs-up badge">{{$shop->like}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/like/0" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-thumbs-down badge">{{$shop->unlike}}</span>
        </a>
        <a  class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>

@elseif($shop->type=='Private')
   <div class="col-md-6 col-sm-6" style="max-height: 250px; margin-top: 5px;">    
    <div class="card hovercard grad1">
        <div class="card-background ">

          <div class="row">
            <div class="col-lg-1 col-sm-1" style="float: left; padding: 0px;">
              <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star badge" aria-hidden="true"> 
                      @if($shop->type=='Public')
                       {{$shop->type}}
                       @else
                       {{$shop->star}}
                       @endif</span>
                        
                    </button>
               </div>
            </div>
                <div class="col-lg-10 col-sm-10" style="float: left; padding: 0px;margin: 0px;">
                  <a href="/shop/{{$shop->slug}}"><button type="submit" class="btn btn-default">{{$shop->name}}</button></a>
                </div>
                
          </div>
          <!----------shop image------------------>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">

         <div class="item active">
        <img src="{{ Storage::url($shop->front_image)}}" alt="Los Angeles" style="width:100%; max-height: 200px;">
        </div>

        <div class="item">
        <img src="{{ Storage::url($shop->right_image)}}" alt="Chicago" style="width:100%; max-height: 200px;">
        </div>
    
        <div class="item">
        <img src="{{ Storage::url($shop->center_image)}}" alt="New York" style="width:100%; max-height: 200px;">
        </div>
        <div class="item">
        <img src="{{ Storage::url($shop->left_image)}}" alt="New York" style="width:100%; max-height: 200px;">
        </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
       </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
       </a>

      </div>
      </div>


          <!-------------shop image end------>
        </div> 
    </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

         <a href="/shop/{{$shop->id}}/like/1" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-thumbs-up badge">{{$shop->like}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/like/0" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-thumbs-down badge">{{$shop->unlike}}</span>
        </a>
        <a  class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>
@endif
@endforeach
{{$allshops->links()}}

  </div>

@endsection