<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public function index(){
        return view('front-end.customer.dashboard', [
            'orders'=>Order::find(Session::get('customerId'))
        ]);
    }

    public function login(){
        return view('front-end.customer.login');
    }

    public function customerValidate($request){
        $this->validate($request,[
            'email'=> 'unique:customers,email',
            'mobile'=>'unique:customers,mobile'
        ]);
    }

//    public function customerLogin(Request $request){
//        $this->customerValidate($request);
//
//        return redirect('customer/dashboard');
//    }
    public function logout(){
        Session::forget('customerName');
        Session::forget('customerId');

        return redirect('/');
    }
}
