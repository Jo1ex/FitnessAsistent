<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeartBeat;

class HeartBeatController extends Controller
{
    public function index() {
        return HeartBeat::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(HeartBeat $heartBeat) {
        return $heartBeat;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'heart_beat' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $heartBeat = HeartBeat::where('id', '=', $id)->first();
        $heartBeat->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $heartBeat = HeartBeat::where('id', '=', $id)->first();
        $heartBeat->delete();
    }
}
