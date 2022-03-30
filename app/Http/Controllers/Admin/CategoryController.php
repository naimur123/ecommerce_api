<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;


class CategoryController extends Controller
{
    public function index(){
        return Categories::all();
        // $categories = Categories::all();
        $categories = Http::get('http://127.0.0.1:8000/api/admin/categories');
        return view('backend.categories.index',$categories);

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);

        $Categories = new Categories();
        $Categories->name = $request->name;
        $Categories->details = $request->details;
        $Categories->remarks = $request->remarks;
        $Categories->status_id = $request->status_id;
        $Categories->Createby =  $request->Createby;
        $Categories->Createdate = $request->Createdate;
        return $Categories->save();


        // return Categories::create($request->all());
    }
    public function update(Request $request, $id){

        $category = Categories::where('id',$id)->update($request->all());
        // $category= Categories::find($id);
        // $category->update($request->all());
        return $category;


    }
    public function destroy($id){

        // $category = Categories::where('id',$id)->delete();
        // return $category;
        return Categories::destroy($id);
    }
}
