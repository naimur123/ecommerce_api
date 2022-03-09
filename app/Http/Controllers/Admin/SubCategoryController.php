<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategories;

class SubCategoryController extends Controller
{
    public function index(){
        return SubCategories::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);


        return SubCategories::create($request->all());
    }
    public function update(Request $request, $id){

        //$category = SubCategories::find($id);
        $subcategory = SubCategories::where('id',$id)->update($request->all());
        //$category->update($request->all());
        return $subcategory;


    }
    public function destroy($id){

        // $subcategory = SubCategories::where('id',$id)->delete();
        // return $subcategory;

       return SubCategories::destroy($id);
    }
}
