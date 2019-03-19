    
@extends('cms.master')
@section('content')

<div class="container py-3 ">
    <h1 class="text-center">Dashboard</h1>
</div>

<div class="container">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead class="table-active">
                    <tr>
                        <th>CMS Admin panel</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            Welcome Admin,
                            <br>
                            Here you can manage the system, add / edit or delete content.
                            <br>
                            Manage the products in the store and track orders
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
