<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        return view('admin.unit.add');
    }

    public function store(Request $request){
        Unit::store($request);
        return redirect('/unit/manage')->with('message', 'Unit Added Successfully');
    }

    public function manage(){
        return view('admin.unit.manage', [
            'units'=>Unit::all()
        ]);
    }

    public function edit($id){
        return view('admin.unit.edit', [
            'unit'=>Unit::find($id)
        ]);
    }

    public function update(Request $request){
        Unit::store($request);
        return redirect('/unit/manage')->with('message', 'Unit Info Updated Successfully');
    }

    public function remove(Request $request){
        Unit::remove($request->id);
        return back()->with('message', 'Unit Deleted Successfully');
    }
}
