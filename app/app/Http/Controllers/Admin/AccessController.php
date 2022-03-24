<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GroupAccess;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AccessController extends Controller
{
    public function index(){
        return GroupAccess::all();

    }
    public function store(Request $request){
        $request->validate([
            'group_id' => 'required',

        ]);


        return GroupAccess::create($request->all());
    }
    public function update(Request $request, $id){

        $group_access = GroupAccess::where('id',$id)->update($request->all());
        return $group_access;


    }
    public function destroy($id){

        // $country = Group_Access::where('id',$id)->delete();
        // return $country;
        return GroupAccess::destroy($id);
    }
    
}
