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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'exercise' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $exercises = Exercises::where('id', '=', $id)->first();
        $exercises->update($request->all());
    }
}
