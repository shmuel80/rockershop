@extends('cms.master')
@section('content')

<div class="container">
    <div class="container">
        <div class="row">
        <a href="{{url('cms/category/create')}}" class="btn btn-primary">Add new category</a>
        </div>
        </div><br><br>
     <div class="row">
      <div class="col-md-12-sm text-center">
      <!-- DataTables Example -->
      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            CATEGORY</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Category Title</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>Category Title</th>
                      <th>Image</th>
                      <th>Update</th>
                      <th>Delete</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($category as $row)               
                  <tr>
                    <td>{{$row['title']}}</td>
                    <td><img src={{asset('/images/'.$row['image'])}}width="50px" height="50px"></td>
                  <td><a href="{{url("cms/category/").'/'.$row['id'].'/edit'}}" class="btn btn-primary">Update</a></td>
                  <td><a href="{{url("cms/category").'/'.$row['id']}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
          </div>  
      </div>
      </div>
        
    @endsection
  </div>

