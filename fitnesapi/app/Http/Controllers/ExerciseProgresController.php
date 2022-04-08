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
}
