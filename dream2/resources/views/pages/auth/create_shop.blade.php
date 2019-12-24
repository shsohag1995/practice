 @extends('layouts.app')
 @section('content')
 <div class="container">
  <div class="row" style="padding-top: 20px;">
    <div class="col-md-3">
      
    </div>
  <div class="col-md-6 pull-left">

      <div class="row">
        <div class="col-md-12 ">
          <h2>Create a new shop:</h2>
        <form method="post" action="{{Route('shop.store')}}"enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="country-name">Enter Country<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="country" spellcheck="false" placeholder="Enter country name">
            </div>
            <div class="form-group">
            <label for="state-name">Enter State<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="state" spellcheck="false" placeholder="Enter state name">
            </div>
            <div class="form-group">
            <label for="district-name">Enter District<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="district" spellcheck="false" placeholder="Enter district name">
            </div>
            <div class="form-group">
            <label for="city-name">Enter  City<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="city" spellcheck="false" placeholder="Enter city name">
            </div>
            <div class="form-group">
            <label for="market-name">Market  Name<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="market" spellcheck="false" placeholder="Enter market name">
            </div>
            <div class="form-group">
            <label for="market-name">Shop Type<span class="required"></span></label>
            </div>
            <div class="form-group">
              
            <div class="col-sm-12">
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Bakery shop"><a href="">Bakery shop</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio" name="shop_type" value="Books shop"><a href="">Books shop</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Butcher shop"><a href="">Butcher shop</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio" name="shop_type" value="Clothes store"  checked><a href="">Clothes store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Diagnostic center"><a href="">Diagnostic center</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Drugs store"><a href="">Drugs store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Fish store"><a href="">Fish store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Grocery store"><a href="">Grocery store</a>
              </label>
                <label class="radio-inline navbar-brand">
                <input type="radio" name="shop_type" value="Hotel" ><a href="">Hotel</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio" name="shop_type" value="Restaurent" ><a href="">Restaurent</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" name="shop_type" value="Stationery store"><a href="">Stationery store</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio" name="shop_type" value="Other"><a href="">Other</a>
              </label>
             </div>
            </div>  



           <div class="form-group">
            <label for="shop-name">Shop Name<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="name" spellcheck="false" placeholder="Enter shop name">
          </div>
          
           
           <div class="form-group">
           <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>
     

     <div class="col-md-3 pull-right">
         
     </div>
</div>
</div>
@endsection