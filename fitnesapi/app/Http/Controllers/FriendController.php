<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index() {
        return Friend::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Friend $friend) {
        return $friend;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id1' => 'required|max:5',
      'user_id2' => 'required|max:5',
      'friend' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $friend = Friend::where('id', '=', $id)->first();
        $friend->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $friend = Friend::where('id', '=', $id)->first();
        $friend->delete();
    }
}
