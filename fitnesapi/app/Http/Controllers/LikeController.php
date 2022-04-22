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
      $request->validate([
      'user_id' => 'required|integer',
      'post_id' => 'required|integer',
      'like' => 'required',
      ]);
      $like= new Like;
      $like->user_id=$request->user_id;
      $like->post_id=$request->post_id;
      $like=$like->save();
    }
    public function update(Request $request, $id)
    {
        $like=Friends::find($id);
        $like->user_id=$request->user_id;
        $like->post_id=$request->post_id;
        $like->like=$request->like;
        $like=$like->save();
    }
    public function destroy(Request $request, $id)
    {
        $like = Like::where('id', '=', $id)->first();
        $like->delete();
    }
}
