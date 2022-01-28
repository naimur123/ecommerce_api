<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index(){
        return Unit::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'remarks' => 'required',


        ]);

        return Unit::create($request->all());
    }
    public function update(Request $request, $id){

        $unit = Unit::where('unit_id',$id)->update($request->all());

        //$category = Unit::find($id);
        //$category->update($request->all());
        return $unit;


    }
    public function destroy($id){

        $unit = Unit::where('unit_id',$id)->delete();
        return $unit;
        //return Unit::destroy($id);
    }
}
