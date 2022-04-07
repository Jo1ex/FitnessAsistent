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
    public function show($id)
    {
        return ExerciseSchedule::findOrFail($id);

    }
}
