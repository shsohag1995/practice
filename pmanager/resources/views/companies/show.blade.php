@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->

      <div class="jumbotron">
        <h1>{{$company->name}}</h1>
        <p class="lead">{{$company->description}}</p>
      </div>

      <!-- Example row of columns -->
      <a class="pull-right btn btn-primary" href="/companies/create/{{$company->id}}"> Create Project</a>
      <div class="row">
        @foreach($company->projects as $project)
        <div class="col-lg-4">
          <h2>{{$project->name}}</h2>
          <p class="text-danger"> {{$project->description}} </p>
          <p><a class="btn btn-primary" href="/project/{{ $project->id }}" role="button">View Project »</a></p>
        </div>
        
         @endforeach
      <!-- Site footer --> 
    </div>
</div>
     

     <div class="col-md-3 pull-right">

       
          <div class="sidebar-module">
            <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
              <li><a href="/project/create/{{$company->id}}"> Add project</a></li>
              <li><a href="/companies"> My companies</a></li>
              <li><a href="/companies/create"> Create companies</a></li>


              <br/>


              <li>
                <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
 

              </li>
              <li><a href="#">Add user</a></li>
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