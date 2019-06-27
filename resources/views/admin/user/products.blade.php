@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Products ordered by {{$user->name}}</h4>
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
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($user->products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->paid}}</td>
                            <td>{{$product->balance}}</td>
                            <td><button  class="@if($product->status =='completed') btn-success @endif btn" >{{$product->status}}</button></td>
                            <td><a href="{{route('admin.pay',$product->id)}}" class="btn btn-info text-white" >Pay</a>
                            <a href="{{route('admin.product.transactions',$product->id)}}" class="btn btn-info text-white">Transactions</a></td>
                        </tr>
                        @empty
                            <tr><td>No Order made</td></tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection