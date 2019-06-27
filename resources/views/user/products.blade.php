@extends('layouts.dashboard')

@section('content')
<div class="container">
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
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->paid}}</td>
                            <td>{{$product->balance}}</td>
                            <td > <button class="btn  @if($product->status =='completed') btn-success @endif">{{$product->status}}</button></td>
                            <td><a href="{{route('product.transactions',$product->id)}}" class="btn btn-info text-white">Transactions</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection