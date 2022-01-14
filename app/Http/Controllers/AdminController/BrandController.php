<?php

namespace App\Http\Controllers\AdminController;

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
            'brand_name' => 'required',
            'brand_image' => 'required',
            'remarks' => 'required',
            'country_id' => 'required',
            'status_id' => 'required'

        ]);


        return Brands::create($request->all());
    }
    public function update(Request $request, $id){

        //$brands = Brands::find($id);
        $brands = Brands::where('brand_id',$id)->update($request->all());
        //$brands->update($request->all());
        return $brands;


    }
    public function destroy($id){
        $brands = Brands::where('brand_id',$id)->delete();
        //$brands->delete();
        return $brands;
    }
}
