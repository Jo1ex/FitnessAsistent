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
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'post' => 'required',
      ]);
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
    function getData(Request $request)
        {
            $request->validate([
            'post'=>'required',
        ]);
            return $request->input();
        }
}
