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
      $request->validate([
      'name' => 'required|max:255',
      'surname' => 'required|max:255',
      'username' => 'required|max:255',
      'email' => 'required|max:255',
      'password' => 'required',
      'User_photo' => 'required',
      'bio' => 'required'
      ]);
      $user= new User;
      $user->name=$request->name;
      $user->surname=$request->surname;
      $user->email=$request->email;
      $user->password=$request->password;
      $user->user_photo=$request->user_photo;
      $user->bio=$request->bio;
      $user=$user->save();
    }
    public function update(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->delete();
    }
}