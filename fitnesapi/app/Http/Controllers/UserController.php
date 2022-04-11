<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(User $user) {
        return $user;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'name' => 'required|max:255',
      'surname' => 'required|max:255',
      'username' => 'required|max:255',
      'email' => 'required|max:255',
      'email_verified_at' => 'required|integer|digits:5',
      'password' => 'required',
      'User_photo' => 'required',
      'bio' => 'required'
      ]);
    }
}
