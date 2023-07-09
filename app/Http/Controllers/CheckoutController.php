<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Customer;
use Session;


class CheckoutController extends Controller
{
    private $customer, $order;
    public function index(){
        return view('front-end.checkout.checkout');
    }

    public function customerValidate($request){
        $this->validate($request,[
           'email'=> 'unique:customers,email',
            'mobile'=>'unique:customers,mobile'
        ]);
    }

    public function confirmOrder(Request $request){
//        return $request;
        if (Session::get('customerId')){
            $this->customer = Customer::find(Session::get('customerId'));
        }
        else{
            $this->customerValidate($request);
            $this->customer = Customer::add($request);
            Session::put('customerId', $this->customer->id);
            Session::put('customerName', $this->customer->name);
        }


        $this->order = Order::add($this->customer->id, $request);
        OrderDetail::add($this->order->id);
        return redirect('checkout/confirm-order/success')->with('message', 'Your Order Has Been Submitted, Please Wait for the Confirmation!!');
    }

    public function success(){
        return view('front-end.checkout.success-order');
    }

}
