<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Last_trainings;

class Last_trainingsController extends Controller
{
    public function index() {
        return Last_trainings::all();
    }
    
}
