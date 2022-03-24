<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index(){
        return Currency::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);


        return Currency::create($request->all());
    }
    public function update(Request $request, $id){

        $currency = Currency::where('id',$id)->update($request->all());
        //$category = Currency::find($id);
        //$category->update($request->all());
        return $currency;


    }
    public function destroy($id){

        // $currency = Currency::where('id',$id)->delete();
        // return $currency;
        return Currency::destroy($id);
    }
}
