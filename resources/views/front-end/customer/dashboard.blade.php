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
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="card card-body">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
