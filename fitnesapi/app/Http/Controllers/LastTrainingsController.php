<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LastTrainings;

class LastTrainingsController extends Controller
{
    public function index() {
        return LastTrainings::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(LastTrainings $lastTrainings) {
        return $lastTrainings;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'last_trainings' => 'required',
      ]);
      $LastTrainings= new TrainingsPlanning;
      $LastTrainings->user_id=$request->user_id;
      $LastTrainings->last_trainings=$request->last_trainings;
      $LastTrainings=$LastTrainings->save();
    }
    public function update(Request $request, $id)
    {
        $lastTrainings = LastTtrainings::where('id', '=', $id)->first();
        $lastTrainings->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $lastTrainings = LastTrainings::where('id', '=', $id)->first();
        $lastTrainings->delete();
    }
}
