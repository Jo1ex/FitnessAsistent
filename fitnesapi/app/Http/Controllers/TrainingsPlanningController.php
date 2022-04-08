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
}
