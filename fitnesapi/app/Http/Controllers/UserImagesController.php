<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImages;

class UserImagesController extends Controller
{
    public function index() {
        return UserImages::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return UserImages::findOrFail($id);

    }
}
