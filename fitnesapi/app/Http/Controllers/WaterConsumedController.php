<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterConsumed;

class WaterConsumedController extends Controller
{
    public function index() {
        return WaterConsumed::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(WaterConsumed $waterConsumed) {
        return $waterConsumed;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'water_consumed' => 'required',
      ]);
      $waterConsumed= new WaterConsumed;
      $waterConsumed->user_id=$request->user_id;
      $waterConsumed->water_consumed=$request->water_consumed;
      $waterConsumed=$waterConsumed->save();
    }
    public function update(Request $request, $id)
    {
        $waterConsumed=WaterConsumed::find($id);
        $waterConsumed->user_id=$request->user_id;
        $waterConsumed->water_consumed=$request->water_consumed;
        $waterConsumed=$waterConsumed->save();
    }
    public function destroy(Request $request, $id)
    {
        $waterConsumed = WaterConsumed::where('id', '=', $id)->first();
        $waterConsumed->delete();
    }
}
