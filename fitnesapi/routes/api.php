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




Route::get('/chat/{id}', [ChatController::class, 'show']);

Route::get('/comment/{id}', [CommentController::class, 'show']);

Route::get('/exercise-progres/{id}', [ExerciseProgresController::class, 'show']);

Route::get('/exercise-schedule/{id}', [ExerciseScheduleController::class, 'show']);

Route::get('/exercises/{id}', [ExercisesController::class, 'show']);

Route::get('/food/{id}', [FoodController::class, 'show']);

Route::get('/friend/{id}', [FriendController::class, 'show']);

Route::get('/heart-beat/{id}', [HeartBeatController::class, 'show']);

Route::get('/last-trainings/{id}', [LastTrainingsController::class, 'show']);

Route::get('/like/{id}', [LikeController::class, 'show']);

Route::get('/meal-schedule/{id}', [MealScheduleController::class, 'show']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/steps/{id}', [StepsController::class, 'show']);

Route::get('/todays-diet/{id}', [TodaysDietController::class, 'show']);

Route::get('/training-planing/{id}', [TrainingsPlanningController::class, 'show']);

Route::get('/user-images/{id}', [UserImagesController::class, 'show']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/water-consumed/{id}', [WaterConsumedController::class, 'show']);