<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;

class BrandController extends Controller
{
    public function index(){
        return Brands::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);
        // $brand = New Brands();
        // $brand->name = $request->name;
        // $brand->image = $request->image;
        // $brand->remarks = $request->remarks;
        // $brand->category_id = $request->cateory_id;


        return Brands::create($request->all());
    }
    public function update(Request $request, $id){

        //$brands = Brands::find($id);
        $brands = Brands::where('id',$id)->update($request->all());
        //$brands->update($request->all());
        return $brands;


    }
    public function destroy($id){
        // $brands = Brands::where('id',$id)->delete();
        //$brands->delete();
        return Brands::destroy($id);
    }
}
