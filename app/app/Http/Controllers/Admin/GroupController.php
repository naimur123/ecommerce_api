<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;

class GroupController extends Controller
{
    public function index(){
        return Groups::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'is_admin' => 'required'

        ]);


        return Groups::create($request->all());
    }
    public function update(Request $request, $id){

        $category = Groups::where('id',$id)->update($request->all());

        // $category = Groups::find($id);
        // $category->update($request->all());
        return $category;


    }
    public function destroy($id){

        // $country = Groups::where('id',$id)->delete();
        // return $country;
        return Groups::destroy($id);
    }
}
