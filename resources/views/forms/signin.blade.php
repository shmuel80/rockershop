@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
</div>
<div class="container-flex">
  <div class="row">
        <div class="container col-md-6">
   <div class="card-deck col-md-6 text-center">
    </div>
    <h1>SignIn</h1>
  <form method="POST" action="{{url('user/userValidate')}}">
    <input type="hidden" class="form-control"  name="_token" value="{{csrf_token()}}"/>
              <div class="form-group">
                  <label for="email">E-mail address</label>
                  <input type="text" class="form-control" name="email" value="{{old('email')}}">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
      </div>
      {{ $errors->first()}}
          </div>
        
    @endsection
  </div>


