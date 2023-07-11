<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function manage()
    {
        return view('admin.order.manage', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
}