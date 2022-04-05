<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heart_beat;

class Heart_beatController extends Controller
{
    public function index() {
        return Heart_beat::all();
    }
    
}
