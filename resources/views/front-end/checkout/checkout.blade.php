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
                                                        <label class="form-check-label" for="exampleCheck1" >Zip Code <span class="form-text">[Optional]</label>
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
                                    Online
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
