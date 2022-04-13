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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'exercise_progres' => 'required',
      ]);
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
