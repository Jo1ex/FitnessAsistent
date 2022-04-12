<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodaysDiet;

class TodaysDietController extends Controller
{
    public function index() {
        return TodaysDiet::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(TodaysDiet $todaysDiet) {
        return $todaysDiet;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id' => 'required|max:5',
      'food' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $todaysDiet = TodaysDiet::where('id', '=', $id)->first();
        $todaysDiet->update($request->all());
    }
}
