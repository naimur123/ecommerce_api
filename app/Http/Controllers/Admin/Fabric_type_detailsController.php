<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fabric_type_details;
use Illuminate\Http\Request;

class Fabric_type_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Fabric_type_details::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fabric_type_id' => 'required',
            'price'   => 'required',
            'qty'     => 'required',
            'color_id' => 'required'

        ]);

        $fabric = new Fabric_type_details();
        $fabric->fabric_type_id = $request->fabric_type_id;
        $fabric->details = $request->details;
        $fabric->price   = $request->price;
        $fabric->unit_id = $request->unit_id;
        $fabric->qty     = $request->qty;
        $fabric->color_id = $request->color_id;
        $fabric->createby =  $request->createby;
        $fabric->createdate = $request->createdate;
        return $fabric->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fabric = Fabric_type_details::find($id);
        $fabric->fabric_type_id = $request->fabric_type_id;
        $fabric->details = $request->details;
        $fabric->price   = $request->price;
        $fabric->unit_id = $request->unit_id;
        $fabric->qty     = $request->qty;
        $fabric->color_id = $request->color_id;
        $fabric->modifiedby =  $request->modifiedby;
        $fabric->modifieddate = $request->modifieddate;
        $fabric->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Fabric_type_details::destroy($id);
    }
}
