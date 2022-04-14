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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      ]);
    }
    public function update(Request $request, $id)
    {
        $trainingsPlanning = TrainingsPlanning::where('id', '=', $id)->first();
        $trainingsPlanning->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $trainingsPlanning = TrainingsPlanning::where('id', '=', $id)->first();
        $trainingsPlanning->delete();
    }
    function getData(Request $request)
        {
            $request->validate([
            'trainings_planning'=>'required',
        ]);
            return $request->input();
        }
}
