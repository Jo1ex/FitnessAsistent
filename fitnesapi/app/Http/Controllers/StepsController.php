<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Steps;

class StepsController extends Controller
{
    public function index() {
        return Steps::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Steps $steps) {
        return $steps;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_:id' => 'required|integer',
      'steps' => 'required',
      ]);
      $steps= new Steps;
      $steps->user_id=$request->user_id;
      $steps->steps=$request->steps;
      $steps=$steps->save();
    }
    public function update(Request $request, $id)
    {
        $steps = Steps::where('id', '=', $id)->first();
        $steps->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $steps = Steps::where('id', '=', $id)->first();
        $steps->delete();
    }
}
