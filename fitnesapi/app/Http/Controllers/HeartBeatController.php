<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeartBeat;

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
    public function show(HeartBeat $heartBeat) {
        return $heartBeat;
    }
}
