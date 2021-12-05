<?php

use Illuminate\Http\Request;
// use App\Http\Controllers\MailController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::apiResource('/login', 'LoginController');
Route::apiResource('/categories', 'CategoriesController');
Route::apiResource('/users', 'UsersController');
Route::apiResource('/mail', 'MailController')->only(['store']);
Route::apiResource('/download', 'DownloadController')->only(['index', 'store']);
Route::apiResource('/tasks', 'TasksController');
Route::apiResource('/subgoals', 'SubGoalsController')->only(['store']);
