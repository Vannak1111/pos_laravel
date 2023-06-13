<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     public function index(){
     $product = Product::all();
        return response()->json([
            'data'=>$product
        ]);
     }
    public function store(Request $request)
    {
        $input = $request->all();
     $data =  DB::table('products')->insert([
        'name' => 'vivo',
        'type' => 'foot',
        'quantity' => 123,
         'supplier_id' => 1,
         'updated_at' => now(),
         'created_at' => now(),
    ]);
    //   Product::create($product);
        return $input;
    }
    public function destroy($id){
        $product =Product::find($id);
        $product->delete();
        return response()->json([
            'status code' =>"200"
        ]);
    }
    public function update (Request $request , $id){
        $input = $request->all();
        $product = Product::find($id);
        $product->update($request->all());
        $new=  Product::find($id);
        return response()->json([
            "old"=>$product,
            "new"=>$new
        ]);
    }

}
