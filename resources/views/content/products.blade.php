@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Best metal albums of {{$cat_title}}</h1>
</div>
<div class="container">
          <div class="row">
          @foreach ($products as $product)
            <div class="col-md-4 text-center">
              <h4>{{$product->title}}</h4>
            <img src='{{asset('images/'.$product->image)}}' width="300px" height="300px">
            <br><br>
            <p><b>price on site: {{$product->price}} $</b></p>
            @if(Cart::get($product->id))
            <button disabled class ="btn btn-primary addToCart">Add To Cart</button>
            @else
            <button data-id='{{$product->id}}' class ="btn btn-primary addToCart">Add To Cart</button>
            @endif
            <a href="{{url('shop/'.$cat_url.'/'.$product->url)}}" class="btn btn-success">More Details</a>  
             <br><br>
            </div>
            
          @endforeach
          </div>
          
          @endsection
</div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{asset('js/js.js')}}" type="text/javascript"></script>
    
    

