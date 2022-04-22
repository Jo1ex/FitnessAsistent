<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingsPlanning;

class TrainingsPlanningController extends Controller
{
    public function index() {
        return TrainingsPlanning::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(TrainingsPlanning $trainingsPlanning) {
        return $trainingsPlanning;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'exercise_id' => 'required|integer',
      ]);
      $trainingsPlanning= new TrainingsPlanning;
      $trainingsPlanning->user_id=$request->user_id;
      $trainingsPlanning->exercise_id=$request->exercise_id;
      $trainingsPlanning=$trainingsPlanning->save();
    }
    public function update(Request $request, $id)
    {
        $trainingsPlanning=Friends::find($id);
        $trainingsPlanning->user_id=$request->user_id;
        $trainingsPlanning->exercise_id=$request->exercise_id;
        $trainingsPlanning=$trainingsPlanning->save();
    }
    public function destroy(Request $request, $id)
    {
        $trainingsPlanning = TrainingsPlanning::where('id', '=', $id)->first();
        $trainingsPlanning->delete();
    }
}
