<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    public function index(){
        return view('admin.product.add', [
            'categories'=>Category::all(),
            'subcategories'=>SubCategory::all(),
            'brands'=> Brand::all(),
            'units'=> Unit::all()
        ]);
    }
    public function getSubCategoryByCategory(){
        return response()->json(SubCategory::where('category_id', $_GET['id'])->get());
    }

    public function store(Request $request){
//        return $request;
        $this->product = Product::store($request);
//        return $request->other_image;
        OtherImage::saveImageUrl($request->other_image, $this->product->id, $this->product->name);
        return redirect('/product/manage')->with('message', 'Product Added Successfully');
    }

    public function manage(){
        return view('admin.product.manage', [
            'products'=>Product::all()
        ]);
    }

    public function edit($id){
        return view('admin.product.edit', [
            'product'=>Product::find($id)
        ]);
    }

    public function update(Request $request){
        Product::store($request);
        return redirect('/product/manage')->with('message', 'Product Info Updated Successfully');
    }

    public function remove(Request $request){
        Product::remove($request->id);
        return back()->with('message', 'Product Deleted Successfully');
    }
}
