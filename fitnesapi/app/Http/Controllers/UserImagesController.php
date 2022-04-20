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
    public function show(UserImages $userImages) {
        return $userImages;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'image_link' => 'required',
      ]);
      $userImages= new UserImages;
      $userImages->user_id=$request->user_id;
      $userImages->image_link=$request->image_link;
      $userImages=$userImages->save();
    }
    public function update(Request $request, $id)
    {
        $userImages = UserImages::where('id', '=', $id)->first();
        $userImages->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $userImages = UserImages::where('id', '=', $id)->first();
        $userImages->delete();
    }
}
