<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon_code;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Coupon_code::all();
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
            'code' => 'required',
            'amount' =>'required'

        ]);

        $input = $request->code;
        $random = Str::random(2);
        $coupon = New Coupon_code();
        $coupon->coupon_code = str_pad($random,3,"-").$input;
        $coupon->coupon_amount = $request->amount;
        $coupon->remarks = $request->remarks;
        $coupon->status_id = $request->status_id;
        $coupon->createby = $request->createby;
        $coupon->createdate = $request->createdate;
        $coupon->save();


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
        $coupon = Coupon_code::find($id);
        $request->validate([
            'code' => 'required',
            'amount' =>'required'

        ]);

        $input = $request->code;
        $random = Str::random(2);
        $coupon->coupon_code = str_pad($random,3,"-").$input;
        $coupon->coupon_amount = $request->amount;
        $coupon->remarks = $request->remarks;
        $coupon->modifiedby = $request->modifiedby;
        $coupon->modifieddate = $request->modifieddate;
        $coupon->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Coupon_code::destroy($id);
    }
}
