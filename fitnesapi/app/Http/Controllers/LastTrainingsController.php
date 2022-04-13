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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'last_trainings' => 'required',
      ]);
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
