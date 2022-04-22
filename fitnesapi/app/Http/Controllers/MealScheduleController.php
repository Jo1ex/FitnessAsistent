<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealSchedule;

class MealScheduleController extends Controller
{
    public function index() {
        return MealSchedule::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(MealSchedule $mealSchedule) {
        return $mealSchedule;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'meal' => 'required',
      ]);
      $mealSchedule= new MealSchedule;
      $mealSchedule->user_id=$request->user_id;
      $mealSchedule->meal=$request->meal;
      $mealSchedule=$mealSchedule->save();
    }
    public function update(Request $request, $id)
    {
        $mealSchedule=MealSchedule::find($id);
        $mealSchedule->user_id=$request->user_id;
        $mealSchedule->meal=$request->meal;
        $mealSchedule=$mealSchedule->save();
    }
    public function destroy(Request $request, $id)
    {
        $mealSchedule = MealSchedule::where('id', '=', $id)->first();
        $mealSchedule->delete();
    }
}
