<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function getAllCategoryProduct($id){
        return view('front-end.category.category', [
            'products'=>Product::where('category_id', $id)->get()
        ]);
    }

    public function getAllSubCategoryProduct($id){
        return view('front-end.subcategory.subcategory', [
            'products'=>Product::where('subcategory_id', $id)->get()
        ]);
    }
}
