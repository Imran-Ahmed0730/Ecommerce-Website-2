@extends('front-end.master')
@section('title')
    Customer Register
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="https://spreethemesprevious.github.io/">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="login-page mt-100">
            <div class="container">
                <form action="{{route('customer.register')}}" method="post" class="login-form common-form mx-auto">
                    @csrf
                    <div class="section-header mb-3">
                        <h2 class="section-heading text-center">Register</h2>
                    </div>
                    <div class="row" align="left">
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Full Name</label>
                                <input type="text"  name="name" required/>
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Mobile</label>
                                <input type="text" name="mobile" required/>
                                @error('mobile')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Email address</label>
                                <input type="email" name="email" required/>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Password</label>
                                <input type="password" name="password"/>
                            </fieldset>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn-primary d-block mt-3 btn-signin">CREATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
