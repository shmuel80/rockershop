    
@extends('cms.master')
@section('content')

<div class="container">

    <div class="card card-login mx-auto mt-5">
        <div class="card-header"><strong>Add new content</strong></div>
        <div class="card-body">
            <form method="post" action="{{url('cms/contents')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <div class="form-group">
                    <label for="sell">Menu:</label>
                    <select class="form-control" id="sell" name="menu">
                        @foreach ($menus as $menu)
                        <option value="{{$menu['id']}}">{{$menu['title']}}</option>
                        @endforeach
                    </select>
                    
                </div>
                
                <div class="form-group">
                    <label for="title">Content Title:</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                </div>
                
                <div class="form-group">
                    <label for="data">Content Data:</label>
                    <textarea class="form-control" rows="5" id="data" name="data">{{old('data')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
            </form>

            <div class="text-center">
                <a class="d-block small mt-3" href="{{url('cms/contents')}}">Back to Contents</a>
            </div>

        </div>
 
    </div>

</div>




@endsection
