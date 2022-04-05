<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercises;

class ExercisesController extends Controller
{
    public function index() {
        return Exercises::all();
    }
    
}
