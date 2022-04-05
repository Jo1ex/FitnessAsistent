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

use App\Http\Controllers\ChatController;

use App\Http\Controllers\CommentController;

use App\Http\Controllers\Exercise_progresController;

use App\Http\Controllers\Exercise_scheduleController;

use App\Http\Controllers\ExerciseController;

use App\Http\Controllers\FoodController;

use App\Http\Controllers\FriendController;

use App\Http\Controllers\Heart_beatController;

use App\Http\Controllers\Last_trainingsController;

use App\Http\Controllers\LikeController;

use App\Http\Controllers\Meal_scheduleController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\StepsController;

use App\Http\Controllers\Todays_dietController;

use App\Http\Controllers\Trainings_planningController;

use App\Http\Controllers\User_imagesController;

use App\Http\Controllers\Water_consumedController;



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
Route::get('/chat', [ChatController::class, 'index']);

Route::get('/comments', [CommentController::class, 'index']);

Route::get('/exercise_progress', [Exercise_progresController::class, 'index']);

Route::get('/exercise_schedules', [Exercise_scheduleController::class, 'index']);

Route::get('/exercises', [ExercisesController::class, 'index']);

Route::get('/foods', [FoodController::class, 'index']);

Route::get('/friends', [FriendController::class, 'index']);

Route::get('/heart_beats', [Heart_beatController::class, 'index']);

Route::get('/last_trainings', [Last_trainingsController::class, 'index']);

Route::get('/likes', [LikeController::class, 'index']);

Route::get('/meal_schedules', [Meal_scheduleController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/steps', [StepsController::class, 'index']);

Route::get('/todays_diets', [Todays_dietController::class, 'index']);

Route::get('/trainings_plannings', [Trainings_planningController::class, 'index']);

Route::get('/user_images', [User_imagesController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/water_consumed', [Water_consumedController::class, 'index']);