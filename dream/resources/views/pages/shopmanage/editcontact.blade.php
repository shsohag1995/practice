@extends('layouts.shopmanage')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-2 ">

        
     </div>
     @foreach($contact as $contact)
  <div class="col-md-8 pull-left">

      <div class="row">
        <div class="col-md-12 ">
           
        <form method="post" action="/shopmanage/{{$shop->id}}/contact/info/update" style="padding-top: 15px;">
          {{ csrf_field() }}
         
         <div class="form-group">

            <label for="company-content"><span class="required"></span>Enter Address</label>

            <textarea type="text" class="form-control" id="company-name" required name="address" spellcheck="false" placeholder="Enter your shop address" rows="10">{{$contact->address}}</textarea>
        </div>
        <div class="form-group">
            <label for="company-content"><span class="required"></span>Contact Info</label>

            <textarea type="text" class="form-control" id="company-name" required name="contact" spellcheck="false" placeholder="Enter contact info" rows="15">{{$contact->contact}}</textarea>
        </div>
       
        <div class="form-group">

           <button type="submit" class="btn btn-primary" value="submit">Submit</button>
          </div>
        </form>
         
    </div>
  </div>
</div>
     @endforeach

     <div class="col-md-2 ">

        
     </div>
</div>
</div>

   
@endsection
