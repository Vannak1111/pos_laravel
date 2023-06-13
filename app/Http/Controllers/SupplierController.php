<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }
    public function create(){
        return view('supplier.create');
    }
    public function store(Request $request ){
        $input = $request->all();
        Supplier::create($input);
        return redirect('supplier');
    }
    public function destory($id){
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('supplier');
    }
    public function edit($id){
        $supplier = Supplier::find($id);
        return view('supplier.edit',compact('supplier'));
    }
    public function update(Request $request , $id){
        $supplier = Supplier::find($id);
        $input = $request->all();
        $supplier->update($input);
        return redirect('supplier');

    }
}
