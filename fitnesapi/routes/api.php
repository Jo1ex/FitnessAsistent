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



Route::get('/chats', [ChatController::class, 'index']);

Route::get('/comments', [CommentController::class, 'index']);

Route::get('/exercise_progress', [ExerciseProgresController::class, 'index']);

Route::get('/exercise_schedules', [ExerciseScheduleController::class, 'index']);

Route::get('/exercises', [ExercisesController::class, 'index']);

Route::get('/foods', [FoodController::class, 'index']);

Route::get('/friends', [FriendController::class, 'index']);

Route::get('/heart_beats', [HeartBeatController::class, 'index']);

Route::get('/last_trainings', [LastTrainingsController::class, 'index']);

Route::get('/likes', [LikeController::class, 'index']);

Route::get('/meal_schedules', [MealScheduleController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/steps', [StepsController::class, 'index']);

Route::get('/todays_diets', [TodaysDietController::class, 'index']);

Route::get('/training_plannings', [TrainingsPlanningController::class, 'index']);

Route::get('/user_images', [UserImagesController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/water_consumeds', [WaterConsumedController::class, 'index']);




Route::get('/chats/{id}', [ChatController::class, 'show']);

Route::get('/comments/{id}', [CommentController::class, 'show']);

Route::get('/exercise_progress/{id}', [ExerciseProgresController::class, 'show']);

Route::get('/exercise_schedules/{id}', [ExerciseScheduleController::class, 'show']);

Route::get('/exercises/{id}', [ExercisesController::class, 'show']);

Route::get('/foods/{id}', [FoodController::class, 'show']);

Route::get('/friends/{id}', [FriendController::class, 'show']);

Route::get('/heart_beats/{id}', [HeartBeatController::class, 'show']);

Route::get('/last_trainings/{id}', [LastTrainingsController::class, 'show']);

Route::get('/likes/{id}', [LikeController::class, 'show']);

Route::get('/meal_schedules/{id}', [MealScheduleController::class, 'show']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/steps/{id}', [StepsController::class, 'show']);

Route::get('/todays_diets/{id}', [TodaysDietController::class, 'show']);

Route::get('/training_plannings/{id}', [TrainingsPlanningController::class, 'show']);

Route::get('/user_images/{id}', [UserImagesController::class, 'show']);

Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/water_consumeds/{id}', [WaterConsumedController::class, 'show']);
