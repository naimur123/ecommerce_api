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

        ]);


        return Brands::create($request->all());
    }
    public function update(Request $request, $id){

        $category = Brands::find($id);
        $category->update($request->all());
        return $category;


    }
    public function destroy($id){
        return Brands::destroy($id);
    }
}
