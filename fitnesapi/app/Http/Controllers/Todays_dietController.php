<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todays_diet;

class Todays_dietController extends Controller
{
    public function index() {
        return Todays_diet::all();
    }
    
}
