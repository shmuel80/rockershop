@extends('cms.master')
@section('content')

<div class="container">
        <div class="row">
         <div class="container col-md-6">
            <div class="container">
             <div class="row">
        <a href="{{url('cms/category')}}" class="btn btn-primary">Back to category</a>
        </div>
        </div><br><br>

            <div class="container col-md-6">
       <div class="card-deck col-md-6 text-center">
        </div>
        <h1>Add New Category</h1>
      <form method="post" action="{{url('cms/category')}}" enctype="multipart/form-data">
      <input type="hidden" name= "_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                      <label for="title">Category Title</label>
                  <input type="text" class="form-control text-origin" name="title" placeholder="{{old('title')}}">
                  </div>
                  <div class="form-group">
                        <label for="url">Category article</label>
                        <input type="text" class="form-control text-target" name="article" placeholder="{{old('article')}}">
                    </div>
                  <div class="form-group">
                      <label for="url">Category url</label>
                      <input type="text" class="form-control text-target" name="url" placeholder="{{old('url')}}">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Save</button>
              </form>
          </div>
              </div>
            
            </div>
    @endsection


