<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
        return Products::all();

    }
    public function store(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_code' => 'required',
            'product_name' => 'required',
            'product_quantity' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'discount_percentage' => 'required',
            'image_one' => 'required',
            'image_two' => 'required',
            'image_three' => 'required',

        ]);


        return Products::create($request->all());
    }
    public function update(Request $request, $id){

        //$product = Products::where('id',$id)->update($request->all());

        $product = Products::find($id);
        $product->save($request->all());
        return $product;


    }
    public function destroy($id){

        //$products = Products::where('id',$id)->delete();
       // return $products;
        return Products::destroy($id);
    }
}
