@extends('front-end.master')
@section('title')
    HomePage
@endsection
@section('content')
    <!-- slideshow start -->
    <div class="slideshow-section position-relative">
        <div class="slideshow-active activate-slider" data-slick='{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "dots": true,
                    "arrows": true,
                    "responsive": [
                        {
                        "breakpoint": 768,
                        "settings": {
                            "arrows": false
                        }
                        }
                    ]
                }'>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="{{asset('/')}}/front-end/assets/img/slideshow/f1.jpg" alt="slide-1">
                <img class="slide-img d-md-none" src="{{asset('/')}}/front-end/assets/img/slideshow/f1-m.jpg" alt="slide-1">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                        <div class="content-box slide-content slide-content-1 py-4">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                               data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                               href="collection-left-sidebar.html"
                               data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="{{asset('/')}}/front-end/assets/img/slideshow/f2.jpg" alt="slide-2">
                <img class="slide-img d-md-none" src="{{asset('/')}}/front-end/assets/img/slideshow/f2-m.jpg" alt="slide-2">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                        <div class="content-box slide-content slide-content-1 py-4 text-center">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                               data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                               href="collection-left-sidebar.html"
                               data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="{{asset('/')}}/front-end/assets/img/slideshow/f3.jpg" alt="slide-3">
                <img class="slide-img d-md-none" src="{{asset('/')}}/front-end/assets/img/slideshow/f3-m.jpg" alt="slide-3">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-center">
                        <div class="content-box slide-content slide-content-1 py-4 text-center">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                               data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                               href="collection-left-sidebar.html"
                               data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="activate-arrows"></div>
        <div class="activate-dots dot-tools"></div>
    </div>
    <!-- slideshow end -->

    <!-- trusted badge start -->
    <div class="trusted-section mt-100 overflow-hidden">
        <div class="trusted-section-inner">
            <div class="container">
                <div class="row justify-content-center trusted-row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge rounded p-0">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{asset('/')}}/front-end/assets/img/trusted/1.png" alt="icon-1">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Free Shipping & Return</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">On all order over
                                    $99.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge rounded p-0">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{asset('/')}}/front-end/assets/img/trusted/2.png" alt="icon-2">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Customer Support 24/7</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">Instant access to
                                    support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge rounded p-0">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{asset('/')}}/front-end/assets/img/trusted/3.png" alt="icon-3">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">100% Secure Payment</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">We ensure secure
                                    payment!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trusted badge end -->

    <!-- banner start -->
    <div class="grid-banner mt-100 overflow-hidden">
        <div class="collection-tab-inner mt-0">
            <div class="container">
                <div class="grid-container-2">
                    <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                       data-aos="fade-right" data-aos-duration="700">
                        <img class="banner-img rounded" src="{{asset('/')}}/front-end/assets/img/banner/f1.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex">
                                <div class="content-box banner-content p-4">
                                    <h2 class="heading_34 primary-color">20% Off On <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                       data-aos="fade-right" data-aos-duration="700">
                        <img class="banner-img rounded" src="{{asset('/')}}/front-end/assets/img/banner/f3.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex justify-content-end">
                                <div class="content-box banner-content p-4 text-end">
                                    <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                       data-aos="fade-left" data-aos-duration="700">
                        <img class="banner-img rounded" src="{{asset('/')}}/front-end/assets/img/banner/f2.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex">
                                <div class="content-box banner-content p-4">
                                    <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                                VIEW MORE
                                            </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Featured Products</h2>
                </div>
                <div class="row">
                    @foreach($featured_products as $product)
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="collection-left-sidebar.html">
                                        <img class="secondary-img" src="{{asset($product->image)}}"
                                             alt="product-img">
                                        <img class="primary-img" src="{{asset($product->image)}}"
                                             alt="product-img">
                                    </a>

                                    <div class="product-badge">
                                        <span class="badge-label badge-percentage rounded">{{$product->category->name}}</span>
                                    </div>
                                </div>
                                <div class="product-card-details">
                                    <p class="mx-3">{{$product->subcategory->name}}</p>
                                    <h3 class="product-card-title">
                                        <a href="{{route('product.about-product', ['id' => $product->id])}}">{{$product->name}}</a>
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
            </div>
        </div>
    </div>
    <!-- collection end -->

    <!-- shop by category start -->
    <div class="shop-category mt-100 overflow-hidden">
        <div class="collection-tab-inner mt-0">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Shop By Category</h2>
                </div>
                <div class="shop-category-2 shop-category-inner">
                    <div class="scattered-item" data-aos="fade-left" data-aos-duration="700">
                        <div class="scattered-wrapper">
                            <div class="scattered-content">
                                <img class="scattered-img" src="{{asset('/')}}/front-end/assets/img/banner/f4.jpg" alt="img">
                            </div>
                            <div class="scattered-details">
                                <h2 class="scattered-heading primary-color">Home Decor</h2>
                                <a href="collection-left-sidebar.html"
                                   class="text_12 link-underline d-block primary-color mt-2">
                                    SHOP COLLECTION
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="scattered-item" data-aos="fade-right" data-aos-duration="700">
                        <div class="scattered-wrapper">
                            <div class="scattered-content">
                                <img class="scattered-img" src="{{asset('/')}}/front-end/assets/img/banner/f5.jpg" alt="img">
                            </div>
                            <div class="scattered-details">
                                <h2 class="scattered-heading primary-color">Storage Furniture</h2>
                                <a href="#2" class="text_12 link-underline d-block primary-color mt-2">
                                    SHOP COLLECTION
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="scattered-item" data-aos="fade-left" data-aos-duration="700">
                        <div class="scattered-wrapper">
                            <div class="scattered-content">
                                <img class="scattered-img" src="{{asset('/')}}/front-end/assets/img/banner/f6.jpg" alt="img">
                            </div>
                            <div class="scattered-details">
                                <h2 class="scattered-heading primary-color">Black Cusion Chair</h2>
                                <a href="#3" class="text_12 link-underline d-block primary-color mt-2">
                                    SHOP COLLECTION
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop by category end -->

    <!-- video start -->
    <div class="video-section mt-100 overflow-hidden">
        <div class="overlay-furniture section-spacing"
             style="background: url('{{asset('/')}}/front-end/assets/img/video/video-furniture.jpg') no-repeat fixed bottom center/cover">
            <div class="container video-container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-tools d-flex align-items-center justify-content-center">
                            <div class="video-button-area">
                                <a class="video-button" href="#video-modal" data-bs-toggle="modal">
                                    <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.5 12.134C22.1667 12.5189 22.1667 13.4811 21.5 13.866L2 25.1244C1.33333 25.5093 0.499999 25.0281 0.499999 24.2583L0.5 1.74167C0.5 0.971867 1.33333 0.490743 2 0.875643L21.5 12.134Z"
                                            fill="#FEFEFE" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" id="video-modal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe height="600" src="https://www.youtube.com/embed/tvPnrfQCiCo"
                                title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video end -->

    <!-- testimonial start -->
    <div class="testimonial-section mt-100 overflow-hidden home-section">
        <div class="testimonial-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12" data-aos="fade-right" data-aos-duration="700">
                        <div class="section-header">
                            <h2 class="section-heading primary-color">What customer say</h2>
                            <p class="section-subheading">
                                The services provided by the officials was smooth and satisfactory. Products and
                                goods delivered were up to satisfaction.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-12" data-aos="fade-left"
                         data-aos-duration="700">
                        <div class="testimonial-container position-relative">
                            <div class="testimonial-slideshow common-slider" data-slick='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "arrows": true
                                        }'>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon-wrap d-flex align-items-center">
                                        <div class="testimonial-icon-quote">
                                            <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </div>
                                        <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="testimonial-review my-4 text_16">
                                        “ I am purchasing furniture from Bisum since the last 6 years. I love
                                        their
                                        prompt service and so far I have faced no complaints with their
                                        furniture.”
                                    </p>
                                    <div class="testimonial-reviewer d-flex align-items-center">
                                        <div class="reviewer-img">
                                            <img src="{{asset('/')}}/front-end/assets/img/testimonial/john.jpg" alt="img">
                                        </div>
                                        <div class="reviewer-info ms-4">
                                            <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                            </h4>
                                            <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon-wrap d-flex align-items-center">
                                        <div class="testimonial-icon-quote">
                                            <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </div>
                                        <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="testimonial-review my-4 text_16">
                                        “ I am purchasing furniture from Bisum since the last 6 years. I love
                                        their
                                        prompt service and so far I have faced no complaints with their
                                        furniture.”
                                    </p>
                                    <div class="testimonial-reviewer d-flex align-items-center">
                                        <div class="reviewer-img">
                                            <img src="{{asset('/')}}/front-end/assets/img/testimonial/john.jpg" alt="img">
                                        </div>
                                        <div class="reviewer-info ms-4">
                                            <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                            </h4>
                                            <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon-wrap d-flex align-items-center">
                                        <div class="testimonial-icon-quote">
                                            <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </div>
                                        <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                            <img src="{{asset('/')}}/front-end/assets/img/icon/star.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="testimonial-review my-4 text_16">
                                        “ I am purchasing furniture from Bisum since the last 6 years. I love
                                        their
                                        prompt service and so far I have faced no complaints with their
                                        furniture.”
                                    </p>
                                    <div class="testimonial-reviewer d-flex align-items-center">
                                        <div class="reviewer-img">
                                            <img src="{{asset('/')}}/front-end/assets/img/testimonial/john.jpg" alt="img">
                                        </div>
                                        <div class="reviewer-info ms-4">
                                            <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                            </h4>
                                            <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial end -->

    <!-- single banner start -->
    <div class="single-banner-section mt-100 overflow-hidden">
        <div class="position-relative overlay">
            <img class="single-banner-img" src="{{asset('/')}}/front-end/assets/img/banner/single-banner-2.jpg" alt="slide-1">

            <div class="content-absolute content-slide">
                <div class="container height-inherit d-flex align-items-center justify-content-center">
                    <div class="content-box single-banner-content py-4 text-center" data-aos="fade-up"
                         data-aos-duration="700">
                        <h2 class="single-banner-heading heading_42 text-white animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                            data-aos-duration="700">
                            Created Furniture
                        </h2>
                        <p class="single-banner-text text_16 text-white animate__animated animate__fadeInUp"
                           data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                           data-aos-duration="700">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.
                        </p>
                        <a class="btn-primary single-banner-btn animate__animated animate__fadeInUp"
                           href="collection-left-sidebar.html"
                           data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                           data-aos-duration="700">
                            DISCOVER NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single banner end -->

    <!-- latest blog start -->
    <div class="latest-blog-section mt-100 overflow-hidden home-section">
        <div class="latest-blog-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Latest Products</h2>
                </div>
                <div class="article-card-container position-relative">
                    <div class="common-slider" data-slick='{
                                "slidesToShow": 3,
                                "slidesToScroll": 1,
                                "dots": false,
                                "arrows": true,
                                "responsive": [
                                  {
                                    "breakpoint": 1281,
                                    "settings": {
                                      "slidesToShow": 2
                                    }
                                  },
                                  {
                                    "breakpoint": 602,
                                    "settings": {
                                      "slidesToShow": 1
                                    }
                                  }
                                ]
                            }'>

                        @foreach($latest_products as $product)
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="{{route('product.about-product', ['id'=>$product->id])}}">
                                            <img class="secondary-img" src="{{asset($product->image)}}"
                                                 alt="product-img">
                                            <img class="primary-img" src="{{asset($product->image)}}"
                                                 alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-percentage rounded">{{$product->category->name}}</span>
                                        </div>
                                    </div>
                                    <div class="product-card-details">
                                        <p class="mx-3">{{$product->subcategory->name}}</p>
                                        <h3 class="product-card-title">
                                            <a href="{{route('product.about-product', ['id'=>$product->id])}}">{{$product->name}}</a>
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
    </div>
    <!-- latest blog end -->

    <!-- brand logo start -->
    <div class="brand-logo-section mt-100">
        <div class="brand-logo-inner">
            <div class="container">
                <div class="brand-logo-container overflow-hidden">
                    <div class="scroll-horizontal row align-items-center flex-nowrap">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                             data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{asset('/')}}/front-end/assets/img/brand/1.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                             data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{asset('/')}}/front-end/assets/img/brand/2.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                             data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{asset('/')}}/front-end/assets/img/brand/3.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                             data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{asset('/')}}/front-end/assets/img/brand/4.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                             data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{asset('/')}}/front-end/assets/img/brand/5.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                             data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{asset('/')}}/front-end/assets/img/brand/6.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
