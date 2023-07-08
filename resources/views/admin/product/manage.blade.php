@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Ecom-Shop</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Shop</li>
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
        <div class="product-list">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-center mb-9">
                        <form class="position-relative">
                            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Product">
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                        <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Filter list"><i class="ti ti-filter"></i></a>
                    </div>
                    <div class="table-responsive border rounded">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Product Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Code</th>
                                <th scope="col">Stock Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1; @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td><h6 class="mb-0 fs-4">{{$i++}}</h6></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset($product->image)}}" class="rounded-circle" alt="..." width="56" height="56">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <h6 class="fw-semibold mb-0 fs-4">{{$product->name}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 ms-2">{{$product->code}}</p>
                                        </div>
                                    </td>
                                    <td><h6 class="mb-0 fs-4">{{$product->stock_amount}}</h6></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($product->status == 1)
                                                <span class="bg-success p-1 rounded-circle"></span>
                                            @else
                                                <span class="bg-warning p-1 rounded-circle"></span>
                                            @endif
                                                <h6 class="mb-0 fs-4">{{$product->status == 1 ? "Published": "Unpublished"}}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group " style="font-size: 18px;">
                                            <a href="{{route('product.details', ['id'=>$product->id])}}" class="btn btn-outline-secondary" style="border-radius: 15%;">
                                                <i class="bi bi-info-square"></i></a>
                                            <a href="{{route('product.edit', ['id'=>$product->id])}}" class="btn btn-outline-primary mx-2" style="border-radius: 15%;">
                                                <i class="bi bi-pen"></i></a>
                                            <form action="{{route('product.delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <button type="submit" class="btn btn-outline-danger" onclick="confirm('Please Confirm Before Deleting it!!')">
                                                    <i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-end py-1">
                            <p class="mb-0 fs-2">Rows per page:</p>
                            <select class="form-select w-auto ms-0 ms-sm-2 me-8 me-sm-4 py-1 pe-7 ps-2 border-0" aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">10</option>
                                <option value="2">25</option>
                            </select>
                            <p class="mb-0 fs-2">1–5 of 12</p>
                            <nav aria-label="...">
                                <ul class="pagination justify-content-center mb-0 ms-8 ms-sm-9">
                                    <li class="page-item p-1">
                                        <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item p-1">
                                        <a class="page-link border-0 rounded-circle text-dark fs-6 round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label fw-normal" for="flexSwitchCheckDefault">Dense padding</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
