<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.subcategory.add', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request){
//        return $request;
        SubCategory::store($request);
        return redirect('/subcategory/manage')->with('message', 'Sub-Category Added Successfully');
    }

    public function manage(){
        return view('admin.subcategory.manage', [
            'subcategories'=>SubCategory::all()
        ]);
    }

    public function edit($id){
        return view('admin.subcategory.edit', [
            'subcategory'=>SubCategory::find($id),
            'categories'=>Category::all()
        ]);
    }

    public function update(Request $request){
        SubCategory::store($request);
        return redirect('/subcategory/manage')->with('message', 'Sub-Category Info Updated Successfully');
    }

    public function remove(Request $request){
        SubCategory::remove($request->id);
        return back()->with('message', 'Sub-Category Deleted Successfully');
    }
}
