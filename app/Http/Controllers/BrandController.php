<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add');
    }

    public function store(Request $request){
        Brand::store($request);
        return redirect('/brand/manage')->with('message', 'Brand Added Successfully');
    }

    public function manage(){
        return view('admin.brand.manage', [
            'brands'=>Brand::all()
        ]);
    }

    public function edit($id){
        return view('admin.brand.edit', [
            'brand'=>Brand::find($id)
        ]);
    }

    public function update(Request $request){
        Brand::store($request);
        return redirect('/brand/manage')->with('message', 'Brand Info Updated Successfully');
    }

    public function remove(Request $request){
        Brand::remove($request->id);
        return back()->with('message', 'Brand Deleted Successfully');
    }
}
