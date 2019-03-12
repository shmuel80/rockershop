@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h1 class="display-4">{{$item['title']}}</h1>
</div>
<div class="container-flex">
          <div class="row">
            <div class="col-md-12-sm text-center">
              <h4>{{$item['title']}}</h4>
        <br>
            <img src='{{asset('images/'.$item['image'])}}' width="300px" height="300px">
            <br><br>
            <p>{{$item['article']}}</p>
            <p><b>price on site: {{$item['price']}} USD</b></p>
            @if(Cart::get($item['id']))
            <button disabled class ="btn btn-primary addToCart">Add To Cart</button>
            @else
            <button data-id='{{$item['id']}}' class ="btn btn-primary addToCart">Add To Cart</button>
            @endif
            <a href="{{url('shop/checkout')}}" class="btn btn-success">Check Out</a>  
             <br><br>
            </div>
          </div>
        
    @endsection
  </div>

