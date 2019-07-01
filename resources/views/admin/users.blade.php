@extends('layouts.dashboard')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h4 class="text-primary-s"> Users</h4>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <input type="search" class="form-control form-block" placeholder="search">
                    </form>
                    <br>
                </div>
            </div>
            <div class="table-responsive">

                <table class="table ">
                    <thead class="bg-primary-s text-white">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->username}}</td>
                            <td>
                                <form action="{{route('admin.user.updaterole',$user->id)}}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="btn-group input-group">
                                        <select name="role_id" id="" class="form-control">
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}" {{$role->id ==$user->role_id?'selected':''}} > {{ucwords($role->name)}}</option>
                                        @endforeach
                                        
                                    </select>
                                    <button class="btn btn-success btn-group-append">Set Role</button>
                                    </div>
                                    
                                </form>
                            </td>
                            <td>
                                <div class="btn-group">
                                     <a href="{{route('admin.user.products',$user->id)}}" class="btn btn-primary text-white">Products</a>
                                <a href="{{route('admin.user.transactions',$user->id)}}" class="btn btn-info text-white">Transactions</a>
                                </div>
                               
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