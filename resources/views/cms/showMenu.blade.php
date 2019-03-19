@extends('cms.master')
@section('content')

<div class="container">
    <div class="container">
        <div class="row">
        <a href="{{url('cms/menu/create')}}" class="btn btn-primary">Add new menu</a>
        </div>
        </div><br><br>
     <div class="row">
      <div class="col-md-12-sm text-center">
      <!-- DataTables Example -->
      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            MENU</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Menu Title</th>
                    <th>Url</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>Menu Title</th>
                      <th>Url</th>
                      <th>Update</th>
                      <th>Delete</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($menus as $menu)
                  <tr>
                    <td>{{$menu['title']}}</td>
                    <td>{{$menu['url']}}</td>
                    <td><a href="{{url('cms/menu/'.$menu['id'].'/edit')}}" class="btn btn-primary">Update</a></td>
                    <td><a href="{{url('cms/menu/'.$menu['id'])}}" class="btn btn-danger">Delete</a></td>
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

