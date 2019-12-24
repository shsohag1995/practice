@extends('layouts.ceo')

@section('content')
<div class="transfar-funds-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="well text-center">Shops Table</h1>
                <div class="transfer-data table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="bg-info">
                        <tr>
                            <th>Shop id</th>
                            <th>Name</th>
                            <th>Shop-type</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>District</th>
                            <th>City</th>
                            <th>Market</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        	@php $i=1; @endphp
                        	@foreach($shops as $shop)
                        <tr>
                            <td>{{$shop->id}}</td>
                            <td>{{$shop->name}}</td>
                            <td>{{$shop->shop_type}}</td>
                            <td>{{$shop->state}}</td>
                            <td>{{$shop->country}}</td>
                            <td>{{$shop->district}}</td>
                            <td>{{$shop->city}}</td>
                            <td>{{$shop->market}}</td>
                            <td>
                            	@if($shop->action=='Show')
                                <a href="/ceo/shop/{{$shop->id}}/hide" class="btn btn-info">Hide</a>
                                @else
                                <a href="/ceo/shop/{{$shop->id}}/show" class="btn btn-success">Show</a>
                                @endif
                            </td>
                        </tr>
                          @php $i++; @endphp
                          @endforeach
                        
                        </tbody>
                      {{$shops->links()}}
                    </table>
              
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
