@extends('admin.master')
@section('title')
    Order Details
@endsection
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Order Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Order Date</th>
                                <td>{{$order->order_date}}</td>
                            </tr>
                            <tr>
                                <th>Tax</th>
                                <td>{{$order->tax_total}} TK</td>
                            </tr>
                            <tr>
                                <th>Shipping Cost</th>
                                <td>{{$order->shipping_total}} TK</td>
                            </tr>
                            <tr>
                                <th>Total Cost</th>
                                <td>{{$order->order_total}} TK</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{{$order->order_status}}</td>
                            </tr>
                            <tr>
                                <th>Delivery Address</th>
                                <td>{{$order->delivery_address}}</td>
                            </tr>
                            <tr>
                                <th>Delivery Status</th>
                                <td>{{$order->delivery_status}}</td>
                            </tr>
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$order->payment_type}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$order->payment_status}}</td>
                            </tr>
                            @if($order->payment_type == 'online')
                                <tr>
                                    <th>Transaction ID</th>
                                    <td>{{$order->transaction_id}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="card">
                    <div class="card-header">Ordered Products</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$product->product_id}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product->selling_price}} TK</td>
                                    <td>{{$product->product_quantity}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="card">
                    <div class="card-header">Customer Information</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$order->customer->name}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$order->customer->email}}</td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td>{{$order->customer->mobile}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$order->customer->address}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">

        </div>
    </div>
@endsection
