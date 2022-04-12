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
      $this->validate($request, [
      'user_id1' => 'required|integer|digits:5',
      'user_id2' => 'required|integer|digits:5',
      'chat' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $chat = Chat::where('id', '=', $id)->first();
        $chat->update($request->all());
    }
}