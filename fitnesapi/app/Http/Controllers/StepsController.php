<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Steps;

class StepsController extends Controller
{
    public function index() {
        return Steps::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return Steps::findOrFail($id);

    }
}
