<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise_progres;


class Exercise_progresController extends Controller
{
    public function index() {
        return Exercise_progresController::all();
    }
    
}
