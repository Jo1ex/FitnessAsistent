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
      $request->validate([
      'user_id1' => 'required|integer',
      'user_id2' => 'required|integer',
      ]);
      $friend= new Friend;
      $friend->user_id1=$request->user_id1;
      $friend->user_id2=$request->user_id2;
      $friend=$friend->save();
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
