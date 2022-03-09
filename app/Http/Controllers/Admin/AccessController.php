<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AccessController extends Controller
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
    // public function update(Request $request, $id){

    //     //$country = Groups::where('id',$id)->update($request->all());

    //     //$category = Country::find($id);
    //     //$category->update($request->all());
    //     //return $country;


    // }
    public function destroy($id){

        // $country = Groups::where('id',$id)->delete();
        // return $country;
        return Groups::destroy($id);
    }
}
