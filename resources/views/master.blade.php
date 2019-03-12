<!doctype html>
<html lang="en">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
  <title>{{$title}}</title>

    <script>var base_url='{{url('')}}';</script>
  </head>
    <body>
       <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow">
       <h5 class="my-0 mr-md-auto font-weight-normal"><i class="fas fa-bolt"></i><a href="{{url('/')}}">Rockers' Choice</a><i class="fas fa-bolt"></i></h5>
       @foreach ($menus as $menu)   
       <a class="p-2 text-dark" href="{{url($menu['url'])}}">{{$menu['title']}}</a>
       
       @endforeach  
            <a class="p-2 text-dark" href="{{url('shop')}}">Shop</a>
            @if(!Cart::isEmpty())
            <a href="{{url('shop/checkout')}}"></a>
            <i class="fas fa-shopping-cart"></i>
            <div class="csscart">
              {{Cart:: getTotalQuantity()}}
            </div>
          </a>
              @endif
            </nav>
            @if(! Session::has('user_id'))
            <a class="btn btn-outline-primary" href="{{url('user/signin')}}">Sign In</a>
            <span style="width: 12px"></span>
            <a class="btn btn-outline-primary" href="{{url('user/signup')}}">Sign Up</a>
            @else
            <a class="btn btn-outline-primary" href="{{url('user/logout')}}">Log out</a>
            @endif
            <span style="width: 12px"></span>
            @if(! Session::has('is_admin'))
            <a class="btn btn-outline-primary" href="{{url('cms/dashboard')}}">Admin</a>
            @endif
          </div>
         <div class="container">
           @if(Session::has('ms'))
            <div class="alert alert-success ms_box" role="alert">
                {{ Session::get('ms') }}
              </div>
          @endif
          @if(count ($errors)>0)
          @foreach ($errors->all() as $message )
          <div class="alert alert-danger" role="alert">
              {{ $message }}
        </div>
        @endforeach
        @endif
        @yield('content')
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{asset('js/js.js')}}" type="text/javascript"></script>
     
      </body>
  
    </html>
    