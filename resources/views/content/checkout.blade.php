@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">You are checking out!!!</h1>
</div>
<div class="container-flex">
    <div class="row">
      <div class="col-md-12 text-center">
         @if($items)
          <table class="table table-bordered">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">Order Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Total Price</th>
              <th scope="col">Delete Order</th>
              </tr>
            </thead>
            <tbody>
             @foreach($items as $item)
             <tr>
             <th scope="row">1</th>
             <td>{{$item['name']}}</td>
             <td>
            <input type="text" value="-" data-id="{{$item['id']}}" size="1" class="text-center btn btn-danger updatecart">
            <span>{{$item['quantity']}}</span>
            <input type="text" value="+" data-id="{{$item['id']}}" size="1" class="text-center btn btn-primary updatecart">
            </td>
            <td>{{$item['price']}} USD</td>
            <td>{{$item['quantity']*$item['price']}} USD</td>
            <td>
            <div class="text-center">
         <a href="{{url('shop/deleteProduct/')."/".$item['id']}}" class="btn btn-danger">
        <i class="far fa-trash-alt"></i>
        
        </a>
        </div>
                </td>
                  </tr>
                  @endforeach
                  <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Total Price</td>
                  <td>{{Cart::getSubTotal()}}USD</td>
                  <td></td>
                  </tr>
             </tbody>
           </table>
          </div>
          <!--</div>-->
          <a href="{{url('shop/clearCart')}}" class="btn btn-danger">Clear Cart</a>
          <a href="{{url('shop/saveorder')}}" class="btn btn-primay">Order Now</a>
          @else
      <span>No records added to cart</span>
     @endif
     @endsection
</div>

