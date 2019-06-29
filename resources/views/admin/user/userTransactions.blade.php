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
                        <th>Deposit</th>
                        <th>Balance</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @forelse($user->transactions as $transaction)
                        <tr>
                            <td>{{$transaction->product->name}}</td>
                            <td>{{$transaction->product->price}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->product->balance}}</td>
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