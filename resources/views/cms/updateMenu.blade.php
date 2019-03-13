@extends('cms.master')
@section('content')

<div class="container">
    <div class="container">
        <div class="row">
        <a href="{{ur('cms/menu')}}" class="btn btn-primary">Back to menu</a>
        </div>
        </div><br><br>
     <div class="row">
        <div class="row">
            <div class="container col-md-6">
       <div class="card-deck col-md-6 text-center">
        </div>
        <h1>Update Menu</h1>
      <form method="post" action="{{url('cms/menu/'.$menu_data['id'])}}">
        <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name= "_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                  <label for="title">Menu Title</label>
                 <input type="text" class="form-control text-origin" name="title" value="{{$menu_data['title']}}">
                  </div>
                  <div class="form-group">
                      <label for="url">Menu url</label>
                      <input type="password" class="form-control text-target" name="url" value="{{$menu_data['title']}}">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
              </form>
          </div>
              </div>
            
            </div>
    @endsection


