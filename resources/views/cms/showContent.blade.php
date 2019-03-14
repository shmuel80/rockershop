@extends('cms.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="container col-md-6">
            <div class="container">
             <div class="row">
        <a href="{{ur('cms/content/create')}}" class="btn btn-primary">Add new content</a>
        </div>
        </div><br><br>
     <div class="row">
      <div class="col-md-12-sm text-center">
      <!-- DataTables Example -->
      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            CONTENT</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Content Title</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>Content Title</th>
                      <th>Update</th>
                      <th>Delete</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($contents as $item)
                  <tr>
                    <td>{{$item['title']}}</td>
                    
                  <td><a href="{{url("cms/content/").'/'.$item['id'].'/edit'}}" class="btn btn-primary">Update</a></td>
                  <td><a href="{{url("cms/content/").'/'.$item['id']}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>  
          </div>
        </div>
        
    @endsection
  </div>

