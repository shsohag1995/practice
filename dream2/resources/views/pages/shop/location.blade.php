@extends('layouts.shop')

@section('content')

<div class="container-fluid">
	@foreach($address as $address)
	<div class="col-md-3"style="font-size: 24px;">
		<h1 class="title">Visit Cost</h1>
         {{$address->visitcost}}
		
	</div>
	<div class="col-md-3">
		
	</div>

	<div class="col-md-6">
		<iframe src="{{$address->maplink}}" width="550" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	

    @endforeach
	</div>
	




@endsection