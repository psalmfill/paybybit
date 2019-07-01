@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>All Transactions</h4>
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
                        <th>Deposit</th>
                        <th>Balance</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @forelse($transactions as $transaction)
                        <tr>
                            <td><a class="text-primary-s" href="{{route('admin.pay',$transaction->product->id)}}">{{$transaction->product->name}}</a> </td>
                            <td>{{$transaction->product->price}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->product->balance}}</td>
                            <td>{{$transaction->product->user->username}}</td>
                            <td>{{$transaction->product->user->email}}</td>
                            <td>{{$transaction->product->user->phone}}</td>
                            <td > <button class=" btn @if($transaction->product->status =='completed') btn-success @endif">{{$transaction->product->status}}</button></td>
        
                        </tr>
                        @empty
                            <tr><td>No transaction made</td></tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection