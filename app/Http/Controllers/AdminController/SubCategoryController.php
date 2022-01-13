<?php

namespace App\Http\Controllers\AdminController;

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
            'subcategory_name' => 'required',
            'subcategory_details' => 'required',
            'remarks' => 'required',
            'category_id' => 'required',
            'status_id' => 'required'

        ]);


        return SubCategories::create($request->all());
    }
    public function update(Request $request, $id){

        $category = SubCategories::find($id);
        $category->update($request->all());
        return $category;


    }
    public function destroy($id){
        return SubCategories::destroy($id);
    }
}
