<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealSchedule;

class MealScheduleController extends Controller
{
    public function index() {
        return MealSchedule::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(MealSchedule $mealSchedule) {
        return $mealSchedule;
    }
}
