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
      $request->validate([
      'user_id' => 'required|integer',
      'food' => 'required',
      'calories' => 'required',
      'proteins' => 'required',
      'fats' => 'required',
      'carbon' => 'required',
      ]);
      $food= new Food;
      $food->user_id=$request->user_id;
      $food->food=$request->food;
      $food->calories=$request->calories;
      $food->proteins=$request->proteins;
      $food->fats=$request->fats;
      $food->carbon=$request->carbon;
      $food=$food->save();
    }
    public function update(Request $request, $id)
    {
        $Foods=Food::find($id);
        $Foods->user_id=$request->user_id;
        $Foods->food=$request->food;
        $Foods->calories=$request->calories;
        $Foods->proteins=$request->proteins;
        $Foods->fats=$request->fats;
        $Foods->carbon=$request->carbon;
        $Foods=$Foods->save();
    }
    public function destroy(Request $request, $id)
    {
        $food = Food::where('id', '=', $id)->first();
        $food->delete();
    }
}
