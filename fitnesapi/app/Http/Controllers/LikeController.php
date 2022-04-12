<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function index() {
        return Like::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Like $like) {
        return $like;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'post_id' => 'required|max:5',
      'like' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $like = Like::where('id', '=', $id)->first();
        $like->update($request->all());
    }
}
