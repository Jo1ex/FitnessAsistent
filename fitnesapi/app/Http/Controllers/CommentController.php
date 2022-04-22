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
      $request->validate([
      'user_id' => 'required|integer',
      'post_id' => 'required|integer',
      'comment' => 'required',
      ]);
      $comment= new Comment;
      $comment->user_id=$request->user_id;
      $comment->post_id=$request->post_id;
      $comment->comment=$request->comment;
      $comment=$comment->save();  
    }
    public function update(Request $request, $id)
    {
        $comment=Comment::find($id);
        $comment->user_id=$request->user_id;
        $comment->post_id=$request->post_id;
        $comment->comment=$request->comment;
        $comment=$comment->save();
    }
    public function destroy(Request $request, $id)
    {
        $comment = Comment::where('id', '=', $id)->first();
        $comment->delete();
    }
}
