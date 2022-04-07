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
    public function show($id)
    {
        return LastTrainings::findOrFail($id);

    }
}
