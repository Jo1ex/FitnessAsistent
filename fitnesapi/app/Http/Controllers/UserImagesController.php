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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'image_link' => 'required',
      ]);
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
    function getData(Request $request)
        {
            $request->validate([
            'image_link'=>'required',
        ]);
            return $request->input();
        }
}
