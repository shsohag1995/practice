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
                <input type="radio"required name="shop_type" value="baby"><a href="">Baby, Toy,Kids, Gift Store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" required name="shop_type" value="bakery" ><a href="">Bakery Shop</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio" required name="shop_type" value="beauty" ><a href="">Beauty ,Health and Hair Shop</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio"required name="shop_type" value="books"><a href="">Books Shop</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="butcher"><a href="">Butcher Shop</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio"required name="shop_type" value="clothes"><a href="">Clothes Store</a>
              </label>
            <!--  <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="diagnostic"><a href="">Diagnostic Center</a> 
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="drugs"><a href="">Drugs Store</a>
              </label> -->
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="electrical"><a href="">Electrical Store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="electronice"><a href="">Electronice Store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="fish"><a href="">Fish Store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="fruits"><a href="">Fruits Store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="furniture"><a href="">Furniture , Shopifies Store</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="grocery"><a href="">Grocery Store</a>
              </label>
                <label class="radio-inline navbar-brand">
                <input type="radio"required name="shop_type" value="hotel" ><a href="">Hotel</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio"required name="shop_type" value="medicine" ><a href="">Medicine ,Pharmacy Store</a>
              </label>
              <label class="radio-inline navbar-brand">
                <input type="radio"required name="shop_type" value="restaurent" ><a href="">Restaurent</a>
              </label>
              <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="shoes"><a href="">Shoes Store</a>
              </label>
               <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="sport"><a href="">Sport ,Hunting , Fitness Store</a>
              </label>
            <!--  <label class="radio-inline navbar-brand" >
                <input type="radio"required name="shop_type" value="stationery"><a href="">Stationery Store</a>
              </label> -->
              
              <label class="radio-inline navbar-brand" >
                
                <input type="radio"required name="shop_type" value="vegetables"><a href="">Vegetables Store</a>
              </label>
             <!-- <label class="radio-inline navbar-brand">
                <input type="radio"required name="shop_type" value="other"><a href="">Other</a>
              </label> -->
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