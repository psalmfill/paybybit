@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h4 class="text-primary-s">Orders</h4>
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

                <table class="table ">
                    <thead class="bg-primary-s text-white">
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->paid}}</td>
                            <td>{{$product->balance}}</td>
                            <td> <button class="btn  @if($product->status =='completed') btn-success @endif">{{$product->status}}</button></td>
                            <td>{{$product->user->name}}</td>
                            <td>{{$product->user->email}}</td>
                            <td>{{$product->created_at}}</td>
                            <td><a href="{{route('admin.product.transactions',$product->id)}}" class="btn btn-info text-white">Transactions</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection