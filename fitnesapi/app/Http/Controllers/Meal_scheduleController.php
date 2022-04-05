<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal_schedule;

class Meal_scheduleController extends Controller
{
    public function index() {
        return Meal_schedule::all();
    }
    
}
