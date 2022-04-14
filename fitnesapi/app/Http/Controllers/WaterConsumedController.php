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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'water_consumed' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $waterConsumed = WaterConsumed::where('id', '=', $id)->first();
        $waterConsumed->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $waterConsumed = WaterConsumed::where('id', '=', $id)->first();
        $waterConsumed->delete();
    }
    function getData(Request $request)
        {
            $request->validate([
            'water_consumed'=>'required',
        ]);
            return $request->input();
        }
}
