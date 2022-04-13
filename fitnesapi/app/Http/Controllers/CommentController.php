<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        return Comment::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Comment $comment) {
        return $comment;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id' => 'required|integer|digits:5',
      'post_id' => 'required|integer|digits:5',
      'comment' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $comment = Comment::where('id', '=', $id)->first();
        $comment->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $comment = Comment::where('id', '=', $id)->first();
        $comment->delete();
    }
}
