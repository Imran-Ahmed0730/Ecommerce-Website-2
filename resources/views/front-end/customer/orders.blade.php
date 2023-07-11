@extends('front-end.master')
@section('title')
    Customer Dashboard
@endsection
@section('content')
    <div class="container mt-5" align="left">
        <main>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="collection-filter filter-drawer">
                        <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                            <h4 class="heading_24">Filter By</h4>
                            <button type="button" class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                        </div>

                        <div class="filter-widget">
                            <a href="{{route('customer.dashboard')}}">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                    Dashboard
                                </div>
                            </a>
                        </div>
                        <div class="filter-widget">
                            <a href="{{route('customer.profile')}}">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                    My Profile
                                </div>
                            </a>
                        </div>
                        <div class="filter-widget">
                            <a href="{{route('customer.orders')}}">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                    Orders
                                </div>
                            </a>
                        </div>
                        <div class="filter-widget">
                            <a href="{{route('customer.account')}}">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                    My Account
                                </div>
                            </a>
                        </div>
                        <div class="filter-widget">
                            <a href="{{route('customer.account.change-password')}}">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                    Change Password
                                </div>
                            </a>
                        </div>
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
