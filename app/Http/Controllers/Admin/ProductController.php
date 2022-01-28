<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;

use function Ramsey\Uuid\v1;

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
        // $product = Products::where('product_id', $id)->firstOrFail()->update($request->all());
        //$product_id = Products::where('product_id', $id)->get('product_id');
        //$product->product_id = $request->product_id;
        //$product = new Products();
        //$product = Products::where('product_id', $product_id)->first()->update($request->all());
        $product = Products::find($id);
        // $product_s = $product->short_description;
        // $product->category_id = $request->category_id;
        // $product->subcat_id = $request->subcat_id;
        // $product->brand_id = $request->brand_id;
        // $product->product_name = $request->product_name;
        // $product->product_slug = $request->product_slug;
        // $product->product_code = $request->product_code;
        // $product->product_quantity = $request->product_quantity;
        // $product->unit_id = $request->unit_id;
        // $product->short_description = $request->short_description;
        // $product->long_description = $request->long_description;
        // $product->product_id = $request->product_id;
        // $product->price = $request->price;
        // $product->discount_price = $request->discount_price;
        // $product->discount_percentage = $request->discount_percentage;
        // $product->currency_id = $request->currency_id;
        // $product->Createby = $request->Createby;
        // $product->Createdate = $request->Createdate;
        // $product->Modifiedby = $request->Modifiedby;
        // $product->Modifieddate = $request->Modifieddate;

        return  $product->update($request->all());





    }
    public function destroy($id){

        $products = Products::where('product_id',$id)->delete();
       // return $products;
        return $products;
    }
}
