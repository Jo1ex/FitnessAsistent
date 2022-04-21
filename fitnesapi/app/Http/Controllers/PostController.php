<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return Post::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Post $post) {
        return $post;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'post' => 'required',
      'caption' => 'required',
      ]);
      $post= new Post;
      $post->user_id=$request->user_id;
      $post->post=$request->post;
      $post->caption=$request->caption;
      $post=$post->save();
    }
    public function update(Request $request, $id)
    {
        $post = Post::where('id', '=', $id)->first();
        $post->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $post = Post::where('id', '=', $id)->first();
        $post->delete();
    }
}
