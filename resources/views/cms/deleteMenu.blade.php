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
        <h1>Delete Menu</h1>
      <form method="post" action="{{url('cms/menu/'.$post_id)}}">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name= "_token" value="{{ csrf_token() }}">
     <div class="form-group">
         <span><h2>Are you sure you want to delete this menu?</h2></span>
     </div>
     
      <button type="submit" class="btn btn-danger" name="submit">Delete</button>
    </form>
    </div>
     </div>
            
   </div>
    @endsection


