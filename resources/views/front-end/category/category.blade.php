@extends('front-end.master')
@section('title')
    Category Based Products
@endsection
@section('content')
    <div class="blog-page mt-100">
        <div class="blog-page-wrapper">
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                            <div class="article-card bg-transparent p-0 shadow-none">
                                <a class="article-card-img-wrapper" href="article.html">
                                    <img src="{{asset($product->image)}}" alt="img"
                                         class="article-card-img rounded img-fluid" height="400px">

                                    <span class="article-tag article-tag-absolute rounded">{{$product->subcategory->name}}</span>
                                </a>
                                <p class="article-card-published text_12 d-flex align-items-center">
                                        <span class="article-date d-flex align-items-center">
                                            <i class="bi bi-bag-fill"></i>
                                            <span class="ms-2">Brand: {{$product->brand->name}}</span>
                                        </span>
                                    <span class="article-author d-flex align-items-center ms-4">
                                            <i class="bi bi-cash-coin"></i>
                                            </span>
                                    <span class="ms-2">Price: {{$product->selling_price}}</span>
                                    </span>
                                </p>
                                <h2 class="article-card-heading heading_18">
                                    <a class="heading_18" href="article.html">
                                        {{$product->name}}
                                    </a>
                                </h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
