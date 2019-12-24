@extends('layouts.shopmanage')

@section('content')
<div class="container" style="padding-top: 5px;">
  <div class="row">
    <div class="col-md-2">
    </div>
@foreach($address as $address)
  <div class="col-md-8 ">

      <div class="row">
        <div class="col-md-12 ">
        <form action="/shopmanage/{{$shop->id}}/address/info/update"  method="POST"  enctype="multipart/form-data">
          {{ csrf_field() }}
          
         <div class="form-group">
            <label for="company-content"><span class="required"></span>Visit Info</label>

            <textarea type="text" class="form-control" id="company-name" required name="visitcost" spellcheck="false" placeholder="Enter how many visitting cost from place to your shop place" rows="15"> {{$address->visitcost}} </textarea>
        </div>
        <div class="form-group">
            <label for="company-content"><span class="required">Google Embed Map</span></label>

            <textarea type="text" class="form-control" id="company-name" required name="maplink" spellcheck="false" placeholder="Copy your Google embed map link and submit.Exmple:https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1826.3532009508347!2d89.15245844042477!3d23.72217644141435!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39feeb72f8e8c057%3A0xd3544bc85e42c2fa!2sMAIN+ENTRANCE+OF+IU!5e0!3m2!1sen!2sbd!4v1544189264962" rows="15">{{$address->maplink}} </textarea>
        </div>
        <div class="form-group">

           <button type="submit" class="btn btn-primary" value="submit">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>
     @endforeach

     <div class="col-md-2">

        
     </div>
</div>
</div>

   
@endsection