@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="container-fluid mt-5">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Ecom-Shop</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Category Module</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="mb-2 text-center">
                    <h3 class="mb-3">Manage Categories</h3>
                    <h5 class=" text-success">{{session('message')}}</h5>
                </div>
                <div class="table-responsive">
                    <table id="default_order"
                           class="table border table-striped table-bordered display text-nowrap"
                           style="width: 100%">
                        <thead>
                        <!-- start row -->
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <!-- end row -->
                        </thead>
                        @php $i=1 @endphp
                        <tbody>
                        <!-- start row -->
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    @if($category->image)
                                        <img src="{{ asset($category->image) }}" alt="" class="rounded-circle" height="100px" width="100px">
                                    @endif

                                </td>
                                <td>{{$category->status == 1 ? "Published": "Unpublished"}}</td>
                                <td>
                                    <div class="btn-group " style="font-size: 18px;">
                                        <a href="{{route('category.edit', ['id'=>$category->id])}}" class="btn btn-outline-primary" style="border-radius: 15%;">
                                            <i class="bi bi-pen"></i></a>
                                        <form action="{{route('category.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$category->id}}">
                                            <button type="submit" class="btn btn-outline-danger mx-2" onclick="return confirm('Please Confirm Before Deleting it!!')">
                                                <i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- end row -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
