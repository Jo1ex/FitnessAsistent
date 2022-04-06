<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todays_diet;

class TodaysDietController extends Controller
{
    public function index() {
        return TodaysDiet::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return TodaysDiet::findOrFail($id);

    }
}
