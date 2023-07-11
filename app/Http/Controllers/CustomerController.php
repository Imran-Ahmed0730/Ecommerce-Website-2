<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    private $customer;
    public function index(){
        return view('front-end.customer.dashboard', [
            'orders'=>Order::find(Session::get('customerId'))
        ]);
    }

    public function login(){
        if (Session::get('customerId')){
            return back()->with('message', 'You are Already Logged In!!');
        }
        else{
            return view('front-end.customer.login');
        }
    }

    public function customerValidate($request){
        $this->validate($request,[
            'email'=> 'unique:customers,email',
            'mobile'=>'unique:customers,mobile'
        ]);
    }

    public function customerLogin(Request $request){
//        return $request;
        $this->customer = Customer::where('email', $request->email)->first();
        if ($this->customer){
            if (password_verify($request->password, $this->customer->password)){
                Session::put('customerId', $this->customer->id);
                Session::put('customerName', $this->customer->name);
                return redirect('customer/dashboard');
            }
            else{
                return back()->with('message', 'Invalid Password, Please Try Again');
            }
        }
        else{
            return back()->with('message', 'Invalid Email, Please Enter A Valid Email');
        }


    }

    public function register(){
        return view('front-end.customer.register');
    }
    public function customerRegister(Request $request){

        $this->customerValidate($request);
        $this->customer = Customer::add($request);
        Session::put('customerId', $this->customer->id);
        Session::put('customerName', $this->customer->name);

        return redirect('customer/dashboard');
    }
    public function logout(){
        Session::forget('customerName');
        Session::forget('customerId');

        return redirect('/');
    }

    public function profile(){
        return view('front-end.customer.profile',[
            'customer'=>Customer::find(Session::get('customerId'))
        ]);
    }
    public function account(){
        return view('front-end.customer.account');
    }
    public function orders(){
        return view('front-end.customer.orders', [
            'orders'=>Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function changePassword(){
        return view('front-end.customer.change-password');
    }
}
