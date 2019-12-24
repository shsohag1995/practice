@extends('layouts.app')

@section('content')

<div class="container">
  <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
              <th style="width:25%">Product</th>
              <th style="width:10%">Product ID</th>
              <th style="width:15%">Shop Name</th>
              <th style="width:5%">Payment</th>
              <th style="width:5%">Price</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <form>
              
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="{{asset('images/shop/s1.jpg')}}" alt="..." class="img-responsive"/></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin">Product 1</h4>
                    
                  </div>
                </div>
              </td>
              <td data-th="Price">Product id</td>
              <td><a href="">Online Pament List </a></td>
              <td data-th="Price">Hand To Hand</td>
              <td data-th="Price">$150.00</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">150.00</td>
              <td class="actions" data-th="">
                
                <button type="submit" name="refresh" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                <button type="submit" name="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                
              </td>
                  </form>
                  
            </tr>
          </tbody>
          <tfoot>
            <tr class="visible-xs">
              <td class="text-center"><strong>Total 1.99</strong></td>
          
            </tr>
            <tr>
              <td><a href="#" class="btn btn-warning"></i>Hand To Hand Payment List<i class="fa fa-angle-right"></i> </a></td>
              <td ></td>
               <td ></td>
                <td ></td>
              <td class="hidden-xs text-center"><strong>Total $150.00</strong></td>
              <td colspan="2" class="hidden-xs"></td>
              <td><a href="" class="btn btn-warning">Online Pament List <i class="fa fa-angle-right"></i></a></td>
            </tr>
          </tfoot>
        </table>
</div>

 
@endsection