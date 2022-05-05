<?php

use App\Models\Post;

use App\Models\Chat;

use App\Models\Comment;

use App\Models\ExerciseProgres;

use App\Models\Exercises;

use App\Models\Food;

use App\Models\Friend;

use App\Models\HeartBeat;

use App\Models\LastTrainings;

use App\Models\ExerciseSchedule;

use App\Models\Like;

use App\Models\MealSchedule;

use App\Models\Steps;

use App\Models\TodaysDiet;

use App\Models\TrainingsPlanning;

use App\Models\UserImages;

use App\Models\WaterConsumed;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ChatController;

use App\Http\Controllers\CommentController;

use App\Http\Controllers\ExerciseProgresController;

use App\Http\Controllers\ExerciseScheduleController;

use App\Http\Controllers\ExercisesController;

use App\Http\Controllers\FoodController;

use App\Http\Controllers\FriendController;

use App\Http\Controllers\HeartBeatController;

use App\Http\Controllers\LastTrainingsController;

use App\Http\Controllers\LikeController;

use App\Http\Controllers\MealScheduleController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\StepsController;

use App\Http\Controllers\TodaysDietController;

use App\Http\Controllers\TrainingsPlanningController;

use App\Http\Controllers\UserImagesController;

use App\Http\Controllers\WaterConsumedController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;



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

Route::apiResource('chats', ChatController::class);

Route::apiResource('comments', CommentController::class);

Route::apiResource('exercise-progres', ExerciseProgresController::class);

Route::apiResource('exercise-schedules', ExerciseScheduleController::class);

Route::apiResource('exercises', ExercisesController::class);

Route::apiResource('foods', FoodController::class);

Route::apiResource('friends', FriendController::class);

Route::apiResource('heart-beats', HeartBeatController::class);

Route::apiResource('last-trainings', LastTrainingsController::class);

Route::apiResource('likes', LikeController::class);

Route::apiResource('meal-schedules', MealScheduleController::class);

Route::apiResource('posts', PostController::class);

Route::apiResource('steps', StepsController::class);

Route::apiResource('todays-diets', TodaysDietController::class);

Route::apiResource('training-plannings', TrainingsPlanningController::class);

Route::apiResource('user-images', UserImagesController::class);

Route::apiResource('users', UserController::class);

Route::apiResource('water-consumeds', WaterConsumedController::class);


//Users
Route::prefix("/users")->group( function() {
    Route::post("/login", [LoginController::class, "login"]);
    Route::middleware("auth_api")->get("/all","api\users\UserController@index");
});
