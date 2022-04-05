<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Steps;

class StepsController extends Controller
{
    public function index() {
        return Steps::all();
    }
    
}
