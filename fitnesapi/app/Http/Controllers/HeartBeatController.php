<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heart_beat;

class HeartBeatController extends Controller
{
    public function index() {
        return HeartBeat::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return HeartBeat::findOrFail($id);

    }
}
