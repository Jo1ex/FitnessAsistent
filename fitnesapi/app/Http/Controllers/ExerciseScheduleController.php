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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'exercise_schedule' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $exerciseSchedule = ExerciseSchedule::where('id', '=', $id)->first();
        $exerciseSchedule->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $exerciseSchedule = ExerciseScheudle::where('id', '=', $id)->first();
        $exerciseSchedule->delete();
    }
    function getData(Request $request)
        {
            $request->validate([
            'exercise_schedule'=>'required',
        ]);
            return $request->input();
        }
}
