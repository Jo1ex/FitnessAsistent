<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index() {
        return Chat::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Chat $chat) {
        return $chat;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id1' => 'required|integer',
      'user_id2' => 'required|integer',
      'message' => 'required|max:255',
      ]);
      $chat= new Chat;
      $chat->user_id1=$request->user_id1;
      $chat->user_id2=$request->user_id2;
      $chat->message=$request->message;
      $chat=$chat->save();
    }
    public function update(Request $request, $id)
    {
        $chat = Chat::where('id', '=', $id)->first();
        $chat->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $chat = Chat::where('id', '=', $id)->first();
        $chat->delete();
    }
}