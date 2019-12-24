@extends('layouts.shop')

@section('content')


<div class="container">
    <div class="row justify-content-center">
    	@foreach($contact as $contact)
        <div class="col-md-3"style="font-size: 24px;">
        	
            <h1>Address :</h1>
				<div>
						{{$contact->address}}	
				</div>
					
			</ul>
        </div>
        <div class="col-md-6"style="font-size: 24px;">
	
			<h1>Contact Info</h1>
					<div>
						{{$contact->contact}}
					</div>			
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