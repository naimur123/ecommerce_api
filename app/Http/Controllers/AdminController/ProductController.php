<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        return Products::all();

    }
    public function store(Request $request){

       $validator = Validator::make(
        $request->all(),
        [
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
        ]
       );
    //    $request->validate([
    //         'product_name' => 'required',
    //         'product_code' => 'required',
    //         'product_name' => 'required',
    //         'product_quantity' => 'required',
    //         'short_description' => 'required',
    //         'price' => 'required',
    //         'discount_price' => 'required',
    //         'discount_percentage' => 'required',
    //         'image_one' => 'required',
    //         'image_two' => 'required',
    //         'image_three' => 'required',

    //     ]);
        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }


        return Products::create($request->all());
    }
    public function update(Request $request, $id){

        //$product = Products::where('product_id',$id)->update($request->all());
        $product = Products::where('product_id', $id)->firstOrFail()->update($request->all());
        //$product = new Products();

        //$product = Products::findOrFail($id);
        //$product->save($request->all());
        return $product;


    }
    public function destroy($id){

        $products = Products::where('product_id',$id)->delete();
       // return $products;
        return $products;
    }
}
