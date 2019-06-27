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
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->paid}}</td>
                            <td>{{$product->balance}}</td>
                            <td class="@if($product->status =='completed') bg-success @endif">{{$product->status}}</td>
                            <td>{{$product->user->name}}</td>
                            <td>{{$product->user->email}}</td>
                            <td><a href="#" class="btn btn-info text-white">Transactions</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection