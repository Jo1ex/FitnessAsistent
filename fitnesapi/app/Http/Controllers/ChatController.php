<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index() {
        $chat = [
            ['type' =>]
            ['type' =>]
            ['type' =>]
        ];
        
        return view('chat'), [
            'chat' => $chat,
        ]);
    }

public function show($id) {
    return view('details',['id' => $id]);
}
}
