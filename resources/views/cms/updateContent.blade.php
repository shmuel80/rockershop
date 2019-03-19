@extends('cms.master')
@section('content')

<div class="container">
        <div class="row">
            <div class="container col-md-6">
            <div class="container">
            <div class="row">
        <a href="{{url('cms/content')}}" class="btn btn-primary">Back to content</a>
        </div>
        </div><br><br>

       <div class="card-deck col-md-6 text-center">
        </div>
        <h1>Update Content</h1>
      <form method="post" action="{{url('cms/content/'.$content['id'])}}">
        <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name= "_token" value="{{ csrf_token() }}">

      <div class="form-group">
            <label for="sel1">Select list:</label>
            <select class="form-control" id="sel1">
            @foreach ($menus as $item)
            <option value="{{$item['id']}}">"{{$item['title']}}"</option>
            @endforeach
          </select>
            </div>
                  <div class="form-group">
                  <label for="title">Content Title</label>
                  <input type="text" class="form-control" name="title" value="{{$content['title']}}">
                  </div>
                  <div class="form-group">
                 <label for="url">Content Data</label>
                <input type="password" class="form-control" name="data" value="{{$content['data']}}">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Save</button>
              </form>
          </div>
              </div>
            
            </div>
    @endsection


