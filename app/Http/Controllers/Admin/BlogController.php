<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return Blogs::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);
        // $brand = New Blogs();
        // $brand->name = $request->name;
        // $brand->image = $request->image;
        // $brand->remarks = $request->remarks;
        // $brand->category_id = $request->cateory_id;


        return Blogs::create($request->all());
    }
    public function update(Request $request, $id){

        //$Blogs = Blogs::find($id);
        $Blogs = Blogs::where('id',$id)->update($request->all());
        //$Blogs->update($request->all());
        return $Blogs;


    }
    public function destroy($id){
        // $Blogs = Blogs::where('id',$id)->delete();
        //$Blogs->delete();
        return Blogs::destroy($id);
    }
}
