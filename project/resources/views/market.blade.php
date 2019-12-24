@extends('layouts.app')

@section('content')
<p></p>
<h4 class="text-center text-capitalize text-primary">Welcome to GitBazar</h4>
<h5 class="text-center text-capitalize">Grow your business with us!</h5>


   <nav class="navbar navbar">
  <div class="container">
    <div class="navbar-header">
      <form style="padding-top: 25px;" class="form-inline navbar-right" action="{{ url('/search') }}" method="Get">
                       {{ csrf_field() }}

         <input type="hidden" name="searchtype" value="market">
             <select  id="country" name="country" class="btn btn-default dynamic" data-dependent="state" style="padding: 3px; margin: 1px;max-width: 125px;">
                    <option >Country</option>
                     @foreach($countries as $country)
                    <option value="{{$country->country}}">{{$country->country}}</option>
                    @endforeach
               </select>
               <select  id="state" name="state" class="btn btn-default dynamic" data-dependent="district"  style="padding: 3px; margin: 1px; max-width: 110px; ">
                    <option value="" >state/division</option>
                     <option value="khulna" >khulna</option>
                    
               </select>
               <select  id="district" name="district" class="btn btn-defaul dynamic"data-dependent="city" style="padding: 3px; margin: 1px; max-width: 120px;">
                    <option >District</option>
          
                      <option value="kushtia" >kushtia</option>
                    
               </select>
               <select  id="city" name="city" class="btn btn-default dynamic" style="padding: 3px; margin: 1px;max-width: 100px;">
                    <option>city</option>
                     <option value="kushtia sadar" >Kushtia sadar</option>
                      <option value="islamic university" >islamic university</option>
               </select>
                
              <select  id="shop_type" name="shop_type" class="btn btn-default" style="padding: 3px; margin: 1px; max-width: 120px;">
                    <option>Shop Type</option>
                    <option value="Public">Public</option>
                    
                    <option value="baby">Baby, Toy,Kids, Gift Store</option>
                    <option value="bakery">Bakery shop</option>
                    <option value="beauty">Beauty ,Health and Hair Shop</option>
                    <option value="books">Books shop</option>
                    <option value="butcher">Butcher shop</option>
                    <option value="clothes">Clothes store</option>
                    <option value="diagnostic">Diagnostic center</option>
                    <option value="drugs">Drugs store</option>
                    <!--<option value="bakery">Bakery shop</option> -->
                    <option value="fish">Fish store</option>
                    <option value="grocery">Grocery store</option>
                    <option value="hotel">Hotel</option>
                    <option value="restaurent">Restaurent</option>
                    <option value="stationery">Stationery store</option>
                    <option value="stationery">Software store</option>
                    <option value="Other">Other</option>          
               </select>
           <button type="submit" class="btn btn-default" name="shop" value="shop">Search</button>
          </form>
        

    

    

    </div>
  </div>
</nav>
</br>
  <div class="container-fluid text-center">
    <div  class="col-md-6"> 
     
        <div class="panel-body"><img src="{{asset('images/shop/s1.jpg')}}" class="img-responsive" style="width:100%; max-height:200px;" alt="Image"></div>
       
      
    </div>


@foreach($allshops as $shop)

@if($shop->type=='Private'||$shop->agent=='agent')
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
                  <a href="/shop/{{$shop->slug}}"><button type="submit" class="btn btn-default text-capitalize">{{$shop->name}}</button></a>
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
      <a href="/shop/{{$shop->slug}}">  <img src="{{ Storage::url($shop->front_image)}}" alt="Los Angeles" style="width:100%; max-height: 200px;"></a> 
        </div>

        <div class="item">
       <a href="/shop/{{$shop->slug}}"> <img src="{{ Storage::url($shop->right_image)}}" alt="Chicago" style="width:100%; max-height: 200px;"></a> 
        </div>
    
        <div class="item">
       <a href="/shop/{{$shop->slug}}"><img src="{{ Storage::url($shop->center_image)}}" alt="New York" style="width:100%; max-height: 200px;"></a> 
        </div>
        <div class="item">
      <a href="/shop/{{$shop->slug}}">  <img src="{{ Storage::url($shop->left_image)}}" alt="New York" style="width:100%; max-height: 200px;"></a> 
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
        <a href="/shop/{{$shop->slug}}/comment"  class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>
 @elseif($shop->type=='Public')
 <div class="col-md-6 col-sm-6" style="max-height: 250px; margin-top: 5px;">    
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
                  <a href="/shop/{{$shop->slug}}"><button type="submit" class="btn btn-default text-capitalize">{{$shop->name}}</button></a>
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
        <a  href="/shop/{{$shop->slug}}/comment" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>
@endif
@endforeach
  <div  class="col-md-6"> 
       <h1></h1>
      <div class="panel panel-primary">
        
        <div class="panel-body"><img src="{{asset('images/shop/s1.jpg')}}" class="img-responsive" style="width:100%; max-height:200px;" alt="Image"></div>
        
      </div>
    </div>
    
  </div>
{{$allshops->links()}}
@endsection

{{--<script type="text/javascript">
  $(document).ready(function(){
     $('.dynamic').change(function(){
         if ($(this).val()!='') {
          var select = $(this).attr("id");
          var value =$(this).val();
          var dependent = $(this).data('dependent');
          var _token=$('input[name="_token"]').val();
           $.ajax({
            url:"{{route('dynamicdependent.cities')}}",
            method:"POST",
            data:{
              select:select,value:value,_token:_token,dependent:dependent
            },
            success:function(result){
              $('#'+dependent).html(result);
            },
           })
          
         }
     });
  });
</script>--}}