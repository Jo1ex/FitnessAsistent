<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_images;

class User_imagesController extends Controller
{
    public function index() {
        return User_images::all();
    }
    
}
