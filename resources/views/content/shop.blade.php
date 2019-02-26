@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Records Pricing</h1>
  <p class="lead">Best records of all time, with special prices only for the real headbangers.</p>
</div>
<div class="container">
          <div class="card-deck mb-3 text-center">
          @foreach ($categories as $category)
            <div class="card mb-4 box-shadow">
              <div class="card-header">
                <h4 class="my-0 font-weight-bold">{{$category['title']}}</h4>
              </div>
              <div class="card-body-flex-auto text-center">
              <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
              <img src='{{asset('images/'.$category['image'])}}' width="300px" height="300px">
             <br>
             <a href="{{url('shop/'.$category['url'])}}">
              <br>
            <input type="button" class="btn btn-lg btn-sm btn-block btn-outline-primary" value="The Albums of {{$category['title']}}" Category>
                 </a>
              </div>
            </div>
          @endforeach
          </div>
        </div> 
       
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{asset('js/js.js')}}" type="text/javascript"></script>
      </body>
      
    </html>
    @endsection

