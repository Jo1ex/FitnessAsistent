<?php

use App\Models\post;

use App\Models\chat;

use App\Models\comment;

use App\Models\exercise_progres;

use App\Models\exercises;

use App\Models\food;

use App\Models\friend;

use App\Models\heart_beat;

use App\Models\last_trainings;

use App\Models\exercise_schedule;

use App\Models\like;

use App\Models\meal_schedule;

use App\Models\steps;

use App\Models\todays_diet;

use App\Models\trainings_planning;

use App\Models\user_images;

use App\Models\water_consumed;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/post', function() {

    return Post::all();

 
});


route::get('/chat', function() {

    return Chat::all();


    

});


route::get('/comment', function() {

    return Comment::all();


    

});


route::get('/exercise_progres', function() {

    return Exercise_progres::all();


    

});


route::get('/exercises', function() {

    return Exercises::all();


    

});


route::get('/food', function() {

    return Food::all();


    

});


route::get('/friend', function() {

    return Friend::all();


    

});


route::get('/heart_beat', function() {

    return Heart_beat::all();


    

});


route::get('/last_trainings', function() {

    return Last_trainings::all();


    

});


route::get('/exercise_schedule', function() {

    return Exercise_schedule::all();


    

});


route::get('/like', function() {

    return Like::all();


    

});


route::get('/meal_schedule', function() {

    return Meal_schedule::all();


    

});


route::get('/steps', function() {

    return Steps::all();


    

});


route::get('/todays_diet', function() {

    return Todays_diet::all();


    

});


route::get('trainings_planning', function() {

    return Trainings_planning::all();


    

});


route::get('user_images', function() {

    return User_images::all();


    

});


route::get('water_consumed', function() {

    return Water_consumed::all();


    

});


Route::post('/post', function() {

    return Post::create([

        'post' => request('post'),

        'caption' => request('caption'),

    ]);
});