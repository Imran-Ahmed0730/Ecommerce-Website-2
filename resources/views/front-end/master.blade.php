<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>
        @yield('title')
    </title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="{{asset('/')}}/front-end/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <!-- all css -->
    @include('front-end.include.style')
</head>

<body>

<div class="preloader js-preloader flex-center" style="position: fixed; z-index: 999; background: #609dd7;">
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>
<div class="body-wrapper">
    @include('front-end.include.header')

    <main id="MainContent" class="content-for-layout">
        @yield('content')
    </main>


    @include('front-end.include.footer')

    <button id="scrollup">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </button>

    @include('front-end.include.mini-nav-bar')

    <div class="offcanvas offcanvas-end" tabindex="-1" id="drawer-cart">
        <div class="offcanvas-header border-btm-black">
            <h5 class="cart-drawer-heading text_16">Your Cart ({{count(ShoppingCart::all())}})</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="cart-content-area d-flex justify-content-between flex-column">
                <div class="minicart-loop custom-scrollbar">
                    <!-- minicart item -->
                    @php $subTotal=0 @endphp
                    @foreach(ShoppingCart::all() as $product)
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="{{asset($product->image)}}" alt="img">
                            </div>
                            <div class="product-info" align="left">
                                <h2 class="product-title"><a href="#">{{$product->name}}</a></h2>
                                <p class="product-vendor">{{$product->qty}}x{{$product->price}} TK</p>
                                <div class="misc d-flex align-items-center justify-content-between">
                                    <div class="product-remove-area d-flex flex-column">
                                        <div class="product-price">Price: {{$product->total}} TK</div>
                                        @php $subTotal += $product->total @endphp
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                        <div class="minicart-footer">
                            <div class="minicart-calc-area">
                                <div class="minicart-calc d-flex align-items-center justify-content-between">
                                    <span class="cart-subtotal mb-0">Subtotal</span>
                                    <span class="cart-subprice">{{$subTotal}} TK</span>
                                </div>

                            </div>
                            <div class="minicart-btn-area d-flex align-items-center justify-content-between mt-5">
                                <a href="{{route('cart.show')}}" class="minicart-btn btn-secondary">View Cart</a>
                                <a href="{{route('checkout')}}" class="minicart-btn btn-primary">Checkout</a>
                            </div>
                        </div>
                </div>
                <div class="cart-empty-area text-center py-5 d-none">
                    <div class="cart-empty-icon pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                        >
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <p class="cart-empty">You have no items in your cart</p>
                </div>
            </div>
        </div>
    </div>

    @include('front-end.include.script')
</div>
</body>
</html>
