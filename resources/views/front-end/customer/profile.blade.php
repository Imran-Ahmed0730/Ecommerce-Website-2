@extends('front-end.master')
@section('title')
    Customer Dashboard
@endsection
@section('content')
    <div class="container mt-5" align="left">
        <main>
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <a href="{{route('customer.dashboard')}}" class="list-group-item list-group-item-action active" aria-current="true">
                            Dashboard
                        </a>
                        <a href="{{route('customer.profile')}}" class="list-group-item list-group-item-action">Profile</a>
                        <a href="{{route('customer.orders')}}" class="list-group-item list-group-item-action">Order</a>
                        <a href="{{route('customer.account')}}" class="list-group-item list-group-item-action">Account</a>
                        <a href="{{route('customer.account.change-password')}}" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="{{route('customer.logout')}}" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-body">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
