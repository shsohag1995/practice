 @extends('layouts.ceo')
 @section('content')
 <div class="container">
  <div class="row" style="padding-top: 20px;">
    <div class="col-md-3">
      <h2>User role list:</h2>
           <ul>
            @foreach($roles as $role)
            <h4>{{$role->id}}. {{ $role->name}}</h4>
             @endforeach
          </ul>
    </div>
  <div class="col-md-6 pull-left">

      <div class="row">
        <div class="col-md-12 ">
          
          <h2>User role list:</h2>
          <ul>
            @foreach($roles as $role)
            <li>{{$role->id}}. {{ $role->name}}</li>
             @endforeach
          </ul>
         
        <form method="post" action="{{url('userrole/store')}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="company-name">Add User Role Name<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="name" spellcheck="false" placeholder="Enter user role name">
          </div>

        <div class="form-group">
           <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>
     

     <div class="col-md-3 pull-right">

       
          <div class="sidebar-module">
            <h4>Action</h4>
            <ol class="list-unstyled">
               <li><a href="/companies">My companies</a></li>
              
              
            </ol>
          </div>
          
          <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              
            </ol>
          </div>
          
        
     </div>
</div>
</div>
@endsection