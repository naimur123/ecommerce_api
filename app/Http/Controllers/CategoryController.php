<?php

namespace App\Http\Controllers;
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

}
