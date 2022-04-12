<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index() {
        return Food::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Food $food) {
        return $food;
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
        $food = Food::where('id', '=', $id)->first();
        $food->update($request->all());
    }
}
