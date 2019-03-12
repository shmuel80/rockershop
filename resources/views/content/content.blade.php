@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">{{$content->title}}</h1>
</div>
<div class="container-flex">
          <div class="row">
            <div class="col-md-12 text-center">
              @foreach($data)
              {{$content->data}}
              @endforeach
            </div>
          </div>
        
    @endsection
  </div>

