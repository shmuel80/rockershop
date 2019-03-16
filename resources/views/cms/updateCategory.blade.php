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
        <h1>Update Category</h1>
      <form method="post" action="{{url('cms/category/'.$category['id'])}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="op" value="update">
      <input type="hidden" name= "_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                   <label for="title">Category Title</label>
                  <input type="text" class="form-control text-origin" name="title" value="{{$content['title']}}">
                  </div>
                  <div class="form-group">
                        <label for="url">Category article</label>
                        <input type="text" class="form-control" name="article" value="{{$content['article']}}">
                    </div>
                  <div class="form-group">
                      <label for="url">Category url</label>
                      <input type="text" class="form-control text-target" name="url" value="{{$content['url']}}">
                  </div>
                  <div class="form group">
                      <img src={{asset('/images/'.$category['image'])}}width="80px" height="80px">
                  </div>
                  <div class="form-group">
                        <label for="url">Category image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                  <button type="submit" class="btn btn-primary" name="submit">Save</button>
              </form>
          </div>
              </div>
            
            </div>
    @endsection


