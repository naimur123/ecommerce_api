<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return News::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);
        // $brand = New News();
        // $brand->name = $request->name;
        // $brand->image = $request->image;
        // $brand->remarks = $request->remarks;
        // $brand->category_id = $request->cateory_id;


        return News::create($request->all());
    }
    public function update(Request $request, $id){

        //$News = News::find($id);
        $News = News::where('id',$id)->update($request->all());
        //$News->update($request->all());
        return $News;


    }
    public function destroy($id){
        // $News = News::where('id',$id)->delete();
        //$News->delete();
        return News::destroy($id);
    }
}
