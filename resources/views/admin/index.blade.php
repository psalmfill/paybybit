@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card-tile">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title">
                            Users
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                           {{$data['users_count']}} 
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
                            Orders
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                           {{$data['products_count']}} 
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
                            Pending Orders
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                           {{$data['pending_order_count']}} 
                           
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
                            Completed Orders
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="count">
                           {{$data['completed_order_count']}} 
                            
                        </h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection