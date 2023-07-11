@extends('front-end.master')
@section('title')
    Add To Cart
@endsection
@section('content')
    <div class="breadcrumb">
        <h3 class="text-center text-success">{{session('message')}}</h3>
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="{{route('home')}}">Home</a></li>
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
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="cart-page mt-100">
            <div class="container">
                <div class="cart-page-wrapper">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12">
                            <table class="cart-table w-100">
                                <thead>
                                <tr>
                                    <th class="cart-caption heading_18"></th>
                                    <th class="cart-caption heading_18">Product</th>
                                    <th class="cart-caption heading_18">Brand</th>
                                    <th class="cart-caption heading_18">Unit Price</th>
                                    <th class="cart-caption text-center heading_18 d-none d-md-table-cell">Quantity</th>
                                    <th class="cart-caption text-center heading_18">Total Price</th>
                                    <th class="cart-caption text-center heading_18">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @php $total = 0 @endphp
                                @foreach($products as $product)
                                    <tr class="cart-item">
                                        <td class="cart-item-media">
                                            <div class="mini-img-wrapper">
                                                <img class="mini-img rounded-circle" src="{{asset($product->image)}}" alt="img" height="100px" width="100px">
                                            </div>
                                        </td>
                                        <td class="cart-item-details">
                                            <h6 class="product-title"><a href="#">{{$product->name}}</a></h6>
                                            <p class="product-vendor">{{$product->category}}</p>
                                        </td>
                                        <td class="cart-item-details">
                                            <p class="product-vendor">{{$product->brand}}</p>
                                        </td>
                                        <td class="cart-item-details">
                                            <p class="product-vendor">{{$product->price}}</p>
                                        </td>
                                        <form action="{{route('cart.update-quantity', ['id'=>$product->__raw_id])}}" method="post">
                                            @csrf
                                            <td class="cart-item-quantity">
                                                <div class="quantity d-flex align-items-center justify-content-between">
                                                    <input class="form-control" type="number" name="qty" value="{{$product->qty}}" min="1">
                                                </div>
                                            </td>
                                            <td class="cart-item-price">
                                                <div class="product-price">{{$product->total}}</div>
                                                @php $total += $product->total @endphp
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-secondary"><i class="bi bi-arrow-left-right"></i></button>
                                                <a href="{{route('cart.remove', ['id'=>$product->__raw_id])}}" class="btn btn-outline-danger"
                                                onclick="confirm('Please Confirm Before Continuing!!')"><i class="bi bi-x-lg"></i></a>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="cart-total-area">
                                <h3 class="cart-total-title d-none d-lg-block mb-0">Cart Totals</h4>
                                    <div class="cart-total-box mt-4">
                                        <div class="subtotal-item subtotal-box">
                                            <h4 class="subtotal-title">Subtotals:</h4>
                                            <p class="subtotal-value">{{$total}}</p>
                                        </div>
                                        <div class="subtotal-item shipping-box">
                                            <h4 class="subtotal-title">Shipping:</h4>
                                            <p class="subtotal-value">{{count($products) ==0 ? $shipping=0:$shipping=100}}</p>
                                        </div>
                                        <div class="subtotal-item discount-box">
                                            <h4 class="subtotal-title">Tax (15%):</h4><br>
                                            <p class="subtotal-value">{{$tax = round( $total+ $total*0.15)}}</p>
                                        </div>
                                        <hr />
                                        <div class="subtotal-item discount-box">
                                            <h4 class="subtotal-title">Total:</h4>
                                            <p class="subtotal-value">{{$totalCost = $tax+$shipping+$total}}</p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="{{route('checkout')}}" class="position-relative btn-primary text-uppercase">
                                                Proceed to checkout
                                            </a>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="{{route('home')}}" class="position-relative btn-primary text-uppercase">
                                                Continue Shopping
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
