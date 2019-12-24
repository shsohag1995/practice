@extends('layouts.shopmanage')

@section('content')
<div class="container" style="padding-top: 5px;">
  <div class="row">
    <div class="col-md-2">
    </div>
@foreach($notice as $notice)
  <div class="col-md-8 pull-left">

      <div class="row">
        <div class="col-md-12 ">
        <form  action="/shopmanage/{{$shop->id}}/notice/info/update" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
        
         <div class="form-group">
            <label for="company-content"><span class="required">Enter Notice Info</span></label>

            <textarea type="text" class="form-control" id="company-info" required name="notice_info" spellcheck="false" placeholder="Enter Notice Info" rows="15">{{$notice->notice_info}}</textarea>
        </div>
        <div class="form-group">
            <label for="company-content"><span class="required"></span> Enter New Notice</label>

            <textarea type="text" class="form-control" id="company-notice" required name="notice" spellcheck="false" placeholder="Enter New Notice" rows="15"> {{$notice->notice}} </textarea>
        </div>
        <div class="form-group">

           <button type="submit" class="btn btn-primary" value="submit">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>
     @endforeach

     <<div class="col-md-2">
    </div>

</div>
</div>

   
@endsection
