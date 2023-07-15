@extends('front-end.master')
@section('title')
    Checkout
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
                <li>Cart</li>
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
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-danger text-center">{{session('message')}}</h4>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="checkout-page mt-5">
            <div class="container">
                <div class="checkout-page-wrapper">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-cash-tab" data-bs-toggle="pill" data-bs-target="#pills-cash" type="button" role="tab" aria-controls="pills-cash" aria-selected="true">Cash on Delivery</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-online-tab" data-bs-toggle="pill" data-bs-target="#pills-online" type="button" role="tab" aria-controls="pills-online" aria-selected="false">Online</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent" style="text-align: left">
                                <div class="tab-pane fade show active" id="pills-cash" role="tabpanel" aria-labelledby="pills-cash-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{route('checkout.confirm-order')}}" method="post">
                                                @csrf
                                                @if($customer)
                                                    <div class=" row mb-3">
                                                        <div class="col-md-12">
                                                            <label for="exampleInputPassword1" class="form-label">Full Name</label>
                                                            <input type="text" name="name" class="form-control" value="{{$customer->name}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="email" name="email" class="form-control" value="{{$customer->email}}" required>
                                                                    @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="exampleInputEmail1" class="form-label">Contact No</label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="text" name="mobile" class="form-control" value="{{$customer->mobile}}" required>
                                                                    @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class=" row mb-3">
                                                        <div class="col-md-12">
                                                            <label for="exampleInputPassword1" class="form-label">Full Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
                                                                    @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="exampleInputEmail1" class="form-label">Contact No</label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="text" name="mobile" class="form-control" placeholder="Your Contact No" required>
                                                                    @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class=" row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="exampleInputPassword1" class="form-label">Delivery Address</label>
                                                        <textarea rows="5" name="delivery_address" class="form-control"  required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <label for="" class="form-label">Country <span class="form-text">[Optional]</span></label>
                                                            <div class="col-md-12">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="bd" selected>Bangladesh</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <label for="" class="form-label">State <span class="form-text">[Optional]</span></label>
                                                            <div class="col-md-12">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="dhaka" selected>Dhaka</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label class="form-check-label" for="exampleCheck1" >Zip Code <span class="form-text">[Optional]</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="form-label">Payment Method</label>
                                                    <div class="col-md-12">
                                                        <input type="radio" name="payment_type" value="cash_on_delivery" class="form-check-input" checked>
                                                        <label class="form-check-label" for="exampleCheck1" >Cash on Delivery</label>
                                                    </div>
                                                </div>
                                                <div class="row my-4">
                                                    <div class="col-md-12">
                                                        <input type="checkbox" class="form-check-input" checked>
                                                        <label class="form-check-label" for="exampleCheck1" >I Accept the Term and Conditions</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Confirm Order</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-online" role="tabpanel" aria-labelledby="pills-online-tab" tabindex="0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 order-md-1">
                                                <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                                    @if($customer)
                                                        <div class="row">
                                                            <div class="col-md-12 mb-3">
                                                                <label for="firstName">Full name</label>
                                                                <input type="text" name="name" class="form-control" id="customer_name" placeholder=""
                                                                       value="{{$customer->name}}" required>
                                                                <div class="invalid-feedback">
                                                                    Valid customer name is required.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="mobile">Mobile</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">+88</span>
                                                                </div>
                                                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile"
                                                                       value="{{$customer->mobile}}" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Your Mobile number is required.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email">Email <span class="text-muted"></span></label>
                                                            <input type="email" name="customer_email" class="form-control" id="email"
                                                                   placeholder="" value="{{$customer->email}}" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a valid email address for shipping updates.
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12 mb-3">
                                                                <label for="firstName">Full name</label>
                                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                                                        required>
                                                                <div class="invalid-feedback">
                                                                    Valid customer name is required.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="mobile">Mobile</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">+88</span>
                                                                </div>
                                                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Contact No"
                                                                        required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Your Mobile number is required.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email">Email <span class="text-muted"></span></label>
                                                            <input type="email" name="email" class="form-control" id="email"
                                                                   placeholder="Your Email Address" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a valid email address for shipping updates.
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="mb-3">
                                                        <label for="address">Address</label>
                                                        <textarea rows="5" name="delivery_address" class="form-control" id="address"
                                                                   required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter your shipping address.
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5 mb-3">
                                                            <label for="country">Country</label>
                                                            <select class="custom-select d-block w-100 form-control" id="country" required>
                                                                <option value="">Choose...</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid country.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="state">State</label>
                                                            <select class="custom-select d-block w-100 form-control" id="state" required>
                                                                <option value="">Choose...</option>
                                                                <option value="Dhaka">Dhaka</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="zip">Zip</label>
                                                            <input type="text" class="form-control" id="zip" placeholder="" required>
                                                            <div class="invalid-feedback">
                                                                Zip code required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <label for="" class="form-label">Payment Method</label>
                                                        <div class="col-md-12">
                                                            <input type="radio" name="payment_type" value="online" class="form-check-input" checked>
                                                            <label class="form-check-label" for="exampleCheck1" >Online</label>
                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="same-address" checked>
                                                        <input type="hidden" value="1200" name="amount" id="total_amount" required/>
                                                        <label class="custom-control-label" for="same-address" >Shipping address is the same as my billing
                                                            address</label>
                                                    </div>

                                                    <hr class="mb-4">
                                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm Order</button>
                                                </form>
                                            </div>
                                        </div>

                                        <footer class="my-5 pt-5 text-muted text-center text-small">
                                            <p class="mb-1">&copy; 2019 Company Name</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                                <li class="list-inline-item"><a href="#">Support</a></li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                            <div class="cart-total-area checkout-summary-area">
                                <h3 class="d-none d-lg-block mb-0 text-center heading_24 mb-4">Order summary</h3>
                                @php $subTotal = 0 @endphp
                                @foreach(ShoppingCart::all() as $product)
                                    <div class="minicart-item d-flex">
                                        <div class="mini-img-wrapper">
                                            <img class="mini-img" src="{{asset('/')}}/front-end/assets/img/products/furniture/1.jpg" alt="img">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="{{route('product.about-product', ['id'=>$product->id])}}">{{$product->name}}</a></h2>
                                            <p class="product-vendor">{{$product->price}} x {{$product->qty}}</p>
                                        </div>
                                    </div>
                                    @php $subTotal += ($product->price*$product->qty) @endphp
                                @endforeach


                                    <div class="cart-total-box mt-4 bg-transparent p-0">
                                        <div class="subtotal-item subtotal-box">
                                            <h4 class="subtotal-title">Subtotal:</h4>
                                            <p class="subtotal-value">{{$subTotal}}</p>
                                        </div>
                                        <div class="subtotal-item shipping-box">
                                            <h4 class="subtotal-title">Shipping:</h4>
                                            <p class="subtotal-value">{{count(ShoppingCart::all()) == 0 ? $shipping=0:$shipping=100}}</p>
                                        </div>
                                        <div class="subtotal-item discount-box">
                                            <h4 class="subtotal-title">Tax:</h4>
                                            <p class="subtotal-value">{{$tax = round($subTotal* 0.15)}}</p>
                                        </div>
                                        <hr />
                                        <div class="subtotal-item discount-box">
                                            <h4 class="subtotal-title">Total:</h4>
                                            <p class="subtotal-value">{{$order_total = $tax+$subTotal+$shipping}}</p>
                                        </div>

                                        @php
                                        Session::put('order_total', $order_total);
                                        Session::put('tax_total', $tax);
                                        Session::put('shipping_total', $shipping);
                                        @endphp


                                        <div class="mt-4 checkout-promo-code">
                                            <input class="input-promo-code" type="text" placeholder="Promo code" />
                                            <a href="checkout.html" class="btn-apply-code position-relative btn-secondary text-uppercase mt-3">
                                                Apply Promo Code
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
