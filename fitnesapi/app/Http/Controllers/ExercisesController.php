<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercises;

class ExercisesController extends Controller
{
    public function index() {
        return Exercises::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Exercises $exercises) {
        return $exercises;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'exercise' => 'required',
      ]);
      $exercises= new Exercises;
      $exercises->user_id=$request->user_id;
      $exercises->exercises=$request->exercises;
      $friend=$friend->save();
    }
    public function update(Request $request, $id)
    {
        $exercises = Exercises::where('id', '=', $id)->first();
        $exercises->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $exercises = Exercises::where('id', '=', $id)->first();
        $exercises->delete();
    }
}
