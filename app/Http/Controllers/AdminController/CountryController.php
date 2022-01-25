<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(){
        return Country::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'remarks' => 'required',
            'status_id' => 'required'

        ]);


        return Country::create($request->all());
    }
    public function update(Request $request, $id){

        $country = Country::where('country_id',$id)->update($request->all());

        //$category = Country::find($id);
        //$category->update($request->all());
        return $country;


    }
    public function destroy($id){

        $country = Country::where('country_id',$id)->delete();
        return $country;
        //return Country::destroy($id);
    }
}
