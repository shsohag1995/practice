@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h1>Contact Info</h1>
			<ul class="timeline">
				<li>
					<h4>Phone:</h4>
					<p>+8801856279041</p>
				</li>
				<li>
					<h4>Email:</h4>
					<p>+8801856279041</p>
				</li>
				
			</ul>
        </div>
        <div class="col-md-6">
	
			<h1>Latest News</h1>
			<ul class="timeline">
				<li>
					<a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
					<a href="#" class="float-right">21 March, 2014</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
				</li>
				<li>
					<a href="#">21 000 Job Seekers</a>
					<a href="#" class="float-right">4 March, 2014</a>
					<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
				</li>
				<li>
					<a href="#">Awesome Employers</a>
					<a href="#" class="float-right">1 April, 2014</a>
					<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
				</li>
			</ul>
		
        </div>
        <div class="col-md-3">
        	<h1></h1>
           <div class="thumbnail">
            <a href=""> <img src="{{asset('images/shop/s1.jpg')}}" class="img-rounded" height="" width="100%" alt="Avatar"></a>
            
          </div>
        </div>
    </div>
</div>
@endsection
