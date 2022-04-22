<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExerciseSchedule;

class ExerciseScheduleController extends Controller
{
    public function index() {
        return ExerciseSchedule::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(ExerciseSchedule $exerciseSchedule) {
        return $exerciseSchedule;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'exercise_schedule' => 'required',
      ]);
      $exerciseSchedule= new ExerciseSchedule;
      $exerciseSchedule->user_id=$request->user_id;
      $exerciseSchedule->exercise_schedule=$request->exercise_scheudle;
      $exerciseSchedule=$exerciseSchedule->save();
    }
    public function update(Request $request, $id)
    {
        $exerciseSchedule=ExerciseSchedule::find($id);
        $exerciseSchedule->user_id=$request->user_id;
        $exerciseSchedule->exerciseSchedule=$request->exerciseSchedule;
        $exerciseSchedule=$Friends->save();
    }
    public function destroy(Request $request, $id)
    {
        $exerciseSchedule = ExerciseSchedule::where('id', '=', $id)->first();
        $exerciseSchedule->delete();
    }
}
