<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index(){
        return Categories::all();

    }
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',

        ]);


        return Categories::create($request->all());
    }
    public function update(Request $request, $id){

        $category = Categories::find($id);
        $category->update($request->all());
        return $category;


    }
    public function destroy($id){
        return Categories::destroy($id);
    }
}
