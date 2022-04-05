<?php

use App\Models\Post;

use App\Models\Chat;

use App\Models\Comment;

use App\Models\Exercise_progres;

use App\Models\Exercises;

use App\Models\Food;

use App\Models\Friend;

use App\Models\Heart_beat;

use App\Models\Last_trainings;

use App\Models\Exercise_schedule;

use App\Models\Like;

use App\Models\Meal_schedule;

use App\Models\Steps;

use App\Models\Todays_diet;

use App\Models\Trainings_planning;

use App\Models\User_images;

use App\Models\Water_consumed;

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


route::get('/exercise-progres', function() {

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


route::get('/heart-beat', function() {

    return Heart_beat::all();


    

});


route::get('/last-trainings', function() {

    return Last_trainings::all();


    

});


route::get('/exercise-schedule', function() {

    return Exercise_schedule::all();


    

});


route::get('/like', function() {

    return Like::all();


    

});


route::get('/meal-schedule', function() {

    return Meal_schedule::all();


    

});


route::get('/steps', function() {

    return Steps::all();


    

});


route::get('/todays-diet', function() {

    return Todays_diet::all();


    

});


route::get('trainings-planning', function() {

    return Trainings_planning::all();


    

});


route::get('user-images', function() {

    return User_images::all();


    

});


route::get('water-consumed', function() {

    return Water_consumed::all();


    

});


Route::post('/post', function() {

    return Post::create([

        'post' => request('post'),

        'caption' => request('caption'),

    ]);
});