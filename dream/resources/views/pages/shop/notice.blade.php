@extends('layouts.shop')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	@foreach($notice as $notice)
        <div class="col-md-3" style="font-size: 24px;">
            <h1>Notice Info</h1>
			
				{{$notice->notice_info}}
			
        </div>
        <div class="col-md-6"style="font-size: 16px;">
			<h1>Latest News</h1>
			     {{$notice->notice}}
		
        </div>
        @endforeach
        <div class="col-md-3">
        	<h1></h1>
           <div class="thumbnail">
            <a href=""> <img src="{{asset('images/shop/s1.jpg')}}" class="img-rounded" height="" width="100%" alt="Avatar"></a>
            
          </div>
        </div>
    </div>
</div>


@endsection