@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('admin.deposit',$product->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">

                        <label for="name">Product Name</label>
                        <input type="text" class="form-control form-block" disabled value="{{$product->name}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <label for="name">Price</label>
                        <input type="text" class="form-control form-block" disabled value="{{$product->price}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <label for="name">Balance</label>
                        <input type="text" class="form-control form-block" disabled value="{{$product->balance}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <label for="name">User</label>
                        <input type="text" class="form-control form-block" disabled value="{{$product->user->name}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <label for="name">Deposit Amount</label>
                        <input type="text" class="form-control form-block" name="amount" @if($product->status =='completed') disabled @endif> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <button class="btn btn-primary" @if($product->status =='completed') disabled @endif>Deposit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection