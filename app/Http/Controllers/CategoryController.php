<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add');
    }

    public function store(Request $request){
        Category::store($request);
        return redirect('/category/manage')->with('message', 'Category Added Successfully');
    }

    public function manage(){
        return view('admin.category.manage', [
            'categories'=>Category::all()
        ]);
    }

    public function edit($id){
        return view('admin.category.edit', [
            'category'=>Category::find($id)
        ]);
    }

    public function update(Request $request){
        Category::store($request);
        return redirect('/category/manage')->with('message', 'Category Info Updated Successfully');
    }

    public function remove(Request $request){
        Category::remove($request->id);
        return back()->with('message', 'Category Deleted Successfully');
    }
}
