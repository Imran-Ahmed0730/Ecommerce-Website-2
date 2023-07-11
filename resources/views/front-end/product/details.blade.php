@extends('front-end.master')
@section('title')
    Product Details
@endsection
@section('content')
    <div class="product-page mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12">
                    <section id="magnific" align="left" style="min-height: 0">
                        <div class="row">
                            <div class="large-5 column">
                                <div class="xzoom-container">
                                    <img class="xzoom5" id="xzoom-magnific" src="{{ asset($product->image) }}" xoriginal="{{ asset($product->image) }}" height="320px" width="320px"/>
                                    <div class="xzoom-thumbs my-2">
                                        @foreach($product->otherImages as $item)
                                            <a href="{{ asset($item->image) }}" style="padding: 0; border-radius: 0"><img class="xzoom-gallery5" width="120px" src="{{ asset($item->image) }}"  xpreview="{{ asset($item->image) }}"></a>
                                        @endforeach
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="product-details ps-lg-4" style="text-align: left;">
                        <div class="mb-3"><span class="product-availability">In Stock</span></div>
                        <h2 class="product-title mb-3">{{$product->name}}</h2>
                        <div class="product-price-wrapper mb-4"> <strong>Price:</strong>
                            <span class="product-price regular-price">{{$product->selling_price}}</span>
                            <del class="product-price compare-price ms-2">{{$product->regular_price}}</del>
                        </div>
                        <div class="product-sku product-meta mb-1">
                            <strong class="label">Product Code: </strong> {{$product->code}}
                        </div>
                        <div class="product-vendor product-meta mb-1">
                            <strong class="label">Category Name:</strong> {{$product->category->name}}
                        </div>
                        <div class="product-vendor product-meta mb-1">
                            <strong class="label">Sub-Category Name:</strong> {{$product->subcategory->name}}
                        </div>
                        <div class="product-vendor product-meta mb-3">
                            <strong class="label">Brand Name:</strong> {{$product->brand->name}}
                        </div>

                        <form class="product-form" action="{{route('cart.add', ['id'=>$product->id])}}" method="post">
                            @csrf
                        <div class="misc d-flex align-items-end justify-content-between mt-4">

                            <div class="d-flex align-items-center justify-content-between">
{{--                                <input class=" btn qty-btn dec-qty"><img src="{{asset('/')}}/front-end/assets/img/icon/minus.svg" alt="minus"></input>--}}
                                Quantity: <input class="form-control mx-2" type="number" name="qty" value="1" min="1" max="{{$product->stock_amount}}">
{{--                                <input class="btn qty-btn inc-qty"><img src="{{asset('/')}}/front-end/assets/img/icon/plus.svg" alt="plus"></input>--}}
                            </div>
                        </div>

                        <div class="product-form-buttons d-flex align-items-center justify-content-between mt-4">
                            <button type="submit" class="position-relative btn-atc btn-add-to-cart loader">ADD TO CART</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description" style="text-align: left">
        <div class="row my-5">
            <div class="col-md-10 offset-1">
                <h3>About Product</h3>
                <p>
                    {{$product->short_description}}
                </p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-10 offset-1">
                <h3>Description</h3>
                <hr>
                <p>
                    {!! $product->long_description !!}
                </p>
            </div>
        </div>
    </div>
    <!-- product tab end -->

    <!-- you may also like start -->
    <div class="featured-collection-section mt-100 home-section overflow-hidden">
        <div class="container">
            <div class="section-header">
                <h2 class="section-heading">You may also like</h2>
            </div>

            <div class="product-container position-relative">
                <div class="common-slider" data-slick='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "dots": false,
                        "arrows": true,
                        "responsive": [
                        {
                            "breakpoint": 1281,
                            "settings": {
                            "slidesToShow": 3
                            }
                        },
                        {
                            "breakpoint": 768,
                            "settings": {
                            "slidesToShow": 2
                            }
                        }
                        ]
                    }'>

                    @foreach($products as $product)
                        <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="{{route('product.about-product', ['id'=>$product->id])}}">
                                        <img class="secondary-img" src="{{asset($product->image)}}"
                                             alt="product-img">
                                        <img class="primary-img" src="{{asset($product->image)}}"
                                             alt="product-img">
                                    </a>

                                    <div class="product-card-action product-card-action-2">
                                        <a href="{{route('product.about-product', ['id'=>$product->id])}}" class="quickview-btn btn-primary"
                                           >QUICKVIEW</a>
                                        <a href="" onclick="event.preventDefault(); document.getElementById('addToCartForm').submit()" class="addtocart-btn btn-primary">ADD TO CART</a>
                                        <form action="{{route('cart.add', ['id'=>$product->id])}}" id="addToCartForm" method="post">
                                            @csrf
                                        </form>
                                    </div>

                                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="black" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="product-card-details">
                                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">{{$product->name}}</a>
                                    </h3>
                                    <div class="product-card-price">
                                        <span class="card-price-regular">{{$product->selling_price}} TK</span>
                                        <span class="card-price-compare text-decoration-line-through">{{$product->regular_price}} TK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
            </div>
        </div>
    </div>
@endsection

