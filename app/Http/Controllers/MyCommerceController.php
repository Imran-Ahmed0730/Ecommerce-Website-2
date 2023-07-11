<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    public function index(){
        return view('front-end.home.home', [
            'latest_products'=>Product::orderBy('id', 'desc')->take('8')->get(),
            'featured_products'=>Product::where('featured_status', 1)->orderBy('id', 'desc')->take('8')->get(),
            'popular_categories'=>Category::where('status', '1')->take('2')
        ]);
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
    public function details($id){
        $product = Product::find($id);
//        return Product::where('subcategory_id', $product->subcategory_id)->get();
        return view('front-end.product.details',[
            'product'=>$product,
            'products'=>Product::where('subcategory_id', $product->subcategory_id)->get()
        ]);
    }

    public function aboutUs(){
        return view('front-end.about-us.about-us');
    }
    public function contactUs(){
        return view('front-end.contact-us.contact-us');
    }

}
