@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card-tile">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title">
                            Purchases
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                            {{$data['products']}}
                        </h2>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card-tile">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title text-success">
                            Completed
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                            5
                        </h2>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card-tile">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title text-danger">
                            Pending
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                            5
                        </h2>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card-tile text-success">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title  ">
                            Transactions
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                            5
                        </h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection