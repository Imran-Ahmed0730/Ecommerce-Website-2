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
                    <div class="card">
                        <div class="card-header"><h2>My Orders</h2></div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hovered">
                                <thead>
                                    <th>SL NO</th>
                                    <th>Order ID</th>
                                    <th>Order Date</th>
                                    <th>Price</th>
                                    <th>Delivery Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$i++}}.</td>
                                        <td class="text-center">{{$order->id}}</td>
                                        <td class="text-center">{{$order->order_date}}</td>
                                        <td>{{$order->order_total}} TK</td>
                                        <td>{{$order->delivery_address}}</td>
                                        <td>{{$order->order_status}}</td>
                                        <td>
                                            <a href=""><i class="bi bi-x-circle-fill text-danger" title="Remove"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
