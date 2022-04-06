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
    public function show($id)
    {
        return Exercises::findOrFail($id);

    }
}
