<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Generic_status;

class GenericStatusController extends Controller
{
    public function index(){
        return Generic_status::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',

        ]);


        return Generic_status::create($request->all());
    }
}
