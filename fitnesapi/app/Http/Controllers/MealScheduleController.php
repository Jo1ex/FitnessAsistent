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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'meal' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $mealSchedule = MealSchedule::where('id', '=', $id)->first();
        $mealSchedule->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $mealSchedule = MealScheudle::where('id', '=', $id)->first();
        $mealSchedule->delete();
    }
}
