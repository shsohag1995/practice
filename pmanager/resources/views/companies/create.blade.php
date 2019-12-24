@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-9 pull-left">

      <div class="row">
        <div class="col-md-12 ">
        <form method="post" action="{{Route('companies.store')}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="company-name">Name<span class="required"></span></label>
            <input type="text" class="form-control" id="company-name" required name="name" spellcheck="false" placeholder="Enter name">
          </div>

         <div class="form-group">
            <label for="company-content"><span class="required"></span></label>

            <textarea type="text" class="form-control" id="company-name" required name="description" spellcheck="false" placeholder="Enter description" rows="5"></textarea>
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