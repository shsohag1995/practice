@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h1>Contact Info</h1>
			<ul class="timeline">
				<li>
					<h4>Phone:</h4>
					<p>+8801744457660</p>
				</li>
				<li>
					<h4>Email:</h4>
					<p>shsohag1995@gmail.com</p>
				</li>
				
			</ul>
        </div>
        <div class="col-md-6">
	
			<h1>Latest News</h1>
			<div class="thumbnail">
            <a href=""> <img src="{{asset('images/shop/s1.jpg')}}" class="img-rounded" height="" width="100%" alt="Avatar"></a>
            
          </div>
		
        </div>
        <div class="col-md-3">
        	
        </div>
    </div>
</div>
@endsection
