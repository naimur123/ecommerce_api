<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function index(){
        return Events::all();

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);
        // $brand = New Event();
        // $brand->name = $request->name;
        // $brand->image = $request->image;
        // $brand->remarks = $request->remarks;
        // $brand->category_id = $request->cateory_id;


        return Events::create($request->all());
    }
    public function update(Request $request, $id){

        //$Event = Event::find($id);
        $Event = Events::where('id',$id)->update($request->all());
        //$Event->update($request->all());
        return $Event;


    }
    public function destroy($id){
        // $Event = Event::where('id',$id)->delete();
        //$Event->delete();
        return Events::destroy($id);
    }
}
