<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainings_planning;

class Trainings_planningController extends Controller
{
    public function index() {
        return Trainings_planning::all();
    }
    
}
