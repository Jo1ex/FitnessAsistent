<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Water_consumed;

class Water_consumedController extends Controller
{
    public function index() {
        return Water_consumed::all();
    }
    
}
