<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExerciseProgres;


class ExerciseProgresController extends Controller
{
    public function index() {
        return ExerciseProgres::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(ExerciseProgres $exerciseProgres) {
        return $exerciseProgres;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'exercise_progres' => 'required',
      ]);
      $exerciseProgres= new ExerciseProgres;
      $exerciseProgres->user_id=$request->user_id;
      $exerciseProgres->exercise_progres=$request->exercise_progres;
      $exerciseProgres=$exerciseProgres->save();  
    }
    public function update(Request $request, $id)
    {
        $exerciseProgres = ExerciseProgres::where('id', '=', $id)->first();
        $exerciseProgres->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $exerciseProgres = ExerciseProgres::where('id', '=', $id)->first();
        $exerciseProgres->delete();
    }
}
