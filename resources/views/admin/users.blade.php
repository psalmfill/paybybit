@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="search" class="form-control form-block" placeholder="search">
            </form>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-striped">
                    <thead class="bg-dark text-white">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Username</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->username}}</td>
                            <td>
                                <a href="{{route('admin.user.products',$user->id)}}" class="btn btn-info text-white">Products</a>
                                <a href="{{route('admin.user.transactions',$user->id)}}" class="btn btn-info text-white">Transactions</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection