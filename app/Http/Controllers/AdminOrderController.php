<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function manage()
    {
        return view('admin.order.manage', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function edit($id){
        return view('admin.order.edit', [
            'order'=>Order::find($id)
        ]);
    }
    public function details($id){
        return view('admin.order.details', [
            'order'=>Order::find($id),
            'products'=>OrderDetail::where('order_id', $id)->get()
        ]);
    }
    public function showInvoice($id){
        return view('admin.order.show-invoice', [
            'order'=>Order::find($id)
        ]);
    }
    public function printInvoice($id){

    }
}
