<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
      $product = Product::all();
      // $supplier = $product->getSupplieName;
      // dd($supplier->name);
      return view('product.index',compact('product'));
    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
      $all = $request->all();
      Product::create($all);
      return redirect('product/create');
    }
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('product');
    }
    public function edit($id){
        $product = Product::find($id);
        
        return view('product.edit',compact('product'));
    }
    public function update(Request $request , $id ){
        $input = $request->all();
     
        $product = Product::find($id);
      
        $product->update($input);
        return redirect('product');
    }
}
