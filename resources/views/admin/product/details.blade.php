@extends('admin.master')
@section('title')
    Product Details
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Product Detail</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Prdocut Module</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">

                            <img src="{{asset('/')}}/admin/dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-details">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-6">
{{--                            <img src="{{asset($product->image)}}" alt="" class="img-fluid">--}}
                            <div class="">
                                <div class="item rounded overflow-hidden">
                                    <img src="{{asset($product->image)}}" alt="" class="img-fluid" height="500px" width="300px">
                                </div>
                            </div>
                            <div class="row my-3">
                                @foreach($product->otherImages as $image)
                                    <div class="col-md-3 col-item rounded overflow-hidden">
                                        <img src="{{asset($image->image)}}" alt="" class="img-fluid">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shop-content">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge text-bg-success fs-2 fw-semibold rounded-3">In Stock</span>
                                    <span class="fs-2 mx-2">Product Code: </span>{{$product->code}}
                                </div>
                                <h4 class="fw-semibold">{{$product->name}}</h4>
                                <p class="mb-3">
                                    <span class="fw-bolder mx-3">Product ID: </span>{{$product->id}}<br>
                                    <span class="fw-bolder mx-3">Model: </span>{{$product->model}}<br>
                                    <span class="fw-bolder mx-3">Category Name: </span>{{$product->category->name}}<br>
                                    <span class="fw-bolder mx-3">Sub-Category Name: </span>{{$product->subcategory->name}}<br>
                                    <span class="fw-bolder mx-3">Brand Name: </span>{{$product->brand->name}}<br>
                                    <span class="fw-bolder mx-3">Unit Type: </span>{{$product->unit->name}}<br>
                                </p>
                                <hr>
                                <p class="mb-3">
                                    <span class="fw-bolder mx-3">Regular Price: </span>{{$product->regular_price}}<br>
                                    <span class="fw-bolder mx-3">Selling Price: </span>{{$product->selling_price}}<br>
                                </p>
                                <hr>
                                <div class="d-flex align-items-center gap-7 pb-7 mb-7 border-bottom">
                                    <p class="mb-3">
                                        <span class="fw-bolder mx-3">Stock Amount: </span>{{$product->stock_amount}}<br>
                                        <span class="fw-bolder mx-3">Hit Count: </span>{{$product->hit_count}}<br>
                                        <span class="fw-bolder mx-3">Sales Count: </span>{{$product->sales_count}}<br>
                                        <span class="fw-bolder mx-3">Feature Status: </span>{{$product->featured_status == 1? 'Featured':'Not Featured'}}<br>
                                        <span class="fw-bolder mx-3">Status: </span>{{$product->status == 1 ? 'Published':'Not Published Yet'}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-none border">
                <div class="card-body p-4">
                    <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-short-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                                Short Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-long-description-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">
                                Long Description
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content pt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-short-description-tab" tabindex="0">
                            {{$product->short_description}}
                        </div>
                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-12 d-flex align-items-stretch">
                                    <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                                        <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                                           {!! $product->long_description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
