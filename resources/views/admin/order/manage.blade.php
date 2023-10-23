@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="container-fluid mt-5" style="padding: 0">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Ecom-Shop</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Order Module</li>
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
        <div class="">
            <div class="">
                <div class="mb-2 text-center">
                    <h3 class="mb-3">Manage Orders</h3>
                    <h5 class=" text-success">{{session('message')}}</h5>
                </div>
                <div class="table-responsive p-1">
                    <table id="default_order"
                           class="table border table-striped table-bordered display text-nowrap"
                           style="width: 100%; padding:0">
                        <thead>
                        <!-- start row -->
                        <tr>
                            <th>SL</th>
                            <th>Order ID</th>
                            <th>Order Date</th>
                            <th>Customer Info</th>
                            <th>Order Total</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        <!-- end row -->
                        </thead>
                        @php $i=1 @endphp
                        <tbody>
                        <!-- start row -->
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->customer->name}} ({{$order->customer->mobile}})</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>
                                    <div class="btn-group " style="font-size: 15px;">
                                        <a href="{{route('order.details', ['id'=>$order->id])}}" class="btn btn-info" title="Order Details" style="border-radius: 20%; padding: 7px;">
                                            <i class="bi bi-info-square"></i></a>
                                        <a href="{{route('order.edit', ['id'=>$order->id])}}" class="btn btn-primary mx-1" title="Edit" style="border-radius: 20%; padding: 7px;">
                                            <i class="bi bi-pen"></i></a>
                                        <a href="{{route('order.invoice.view', ['id'=>$order->id])}}" class="btn btn-indigo" title="View Invoice" style="border-radius: 20%; padding: 7px;">
                                            <i class="bi bi-receipt"></i></a>
                                        <a href="javascript:window.print()" class="btn btn-success mx-1" title="Print Invoice" style="border-radius: 20%; padding: 7px;">
                                            <i class="ti ti-arrow-big-down-filled"></i></a>
                                        <a href="{{route('order.invoice.print', ['id'=>$order->id])}}" class="btn btn-atc mx-1" title="Print Invoice" style="border-radius: 20%; padding: 7px;">
                                            <i class="bi bi-printer-fill"></i></a>
                                        <form action="{{route('order.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$order->id}}" title="Delete Order">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Please Confirm Before Deleting it!!')" style="padding: 8px 2px;">
                                                <i class="bi bi-trash-fill" style="padding: 7px;"></i></button>
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
