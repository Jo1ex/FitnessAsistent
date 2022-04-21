<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodaysDiet;

class TodaysDietController extends Controller
{
    public function index() {
        return TodaysDiet::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(TodaysDiet $todaysDiet) {
        return $todaysDiet;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'calories' => 'required',
      'proteins' => 'required',
      'fats' => 'required',
      'carbon' => 'required',
      ]);
      $todaysDiet= new TodaysDiet;
      $todaysDiet->user_id=$request->user_id;
      $todaysDiet->calories=$request->calories;
      $todaysDiet->proteins=$request->proteins;
      $todaysDiet->fats=$request->fats;
      $todaysDiet->carbon=$request->carbon;
      $todaysDiet=$todaysDiet->save();
    }
    public function update(Request $request, $id)
    {
        $todaysDiet = TodaysDiet::where('id', '=', $id)->first();
        $todaysDiet->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $todaysDiet = TodaysDiet::where('id', '=', $id)->first();
        $todaysDiet->delete();
    }
}
