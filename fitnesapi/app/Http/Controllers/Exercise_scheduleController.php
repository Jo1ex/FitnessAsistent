<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise_schedule;

class Exercise_scheduleController extends Controller
{
    public function index() {
        return Exercise_schedule::all();
    }
    
}
