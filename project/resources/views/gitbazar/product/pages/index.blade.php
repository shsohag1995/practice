@extends('gitbazar.product.layout.app')

@section('content')
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              @include('gitbazar.product.partials.header') 
                
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid" style="min-height: 50em">
            <div class="row">
                @include('gitbazar.product.partials.product')

            </div>
             {{$products->links()}}
            </div><!-- /.container-fluid -->

        </div><!-- /.content -->

    </div>

@endsection