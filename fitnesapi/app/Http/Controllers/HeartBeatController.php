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
      $request->validate([
      'user_id' => 'required|integer',
      'heart_beat' => 'required',
      ]);
      $heartBeat= new HeartBeat;
      $heartBeat->user_id=$request->user_id;
      $heartBeat->heart_beat=$request->heart_beat;
      $heartBeat=$heartBeat->save();
    }
    public function update(Request $request, $id)
    {
        $heartBeat=HeartBeat::find($id);
        $heartBeat->user_id=$request->user_id;
        $heartBeat->heart_beat=$request->heart_beat;
        $heartBeat=$heartBeat->save();
    }
    public function destroy(Request $request, $id)
    {
        $heartBeat = HeartBeat::where('id', '=', $id)->first();
        $heartBeat->delete();
    }
}
