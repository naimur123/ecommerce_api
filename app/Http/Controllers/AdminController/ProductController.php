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
            'image_one' => 'required',

        ]);


        return Products::create($request->all());
    }
    public function update(Request $request, $id){

        $category = Products::find($id);
        $category->update($request->all());
        return $category;


    }
    public function destroy($id){
        return Products::destroy($id);
    }
}
