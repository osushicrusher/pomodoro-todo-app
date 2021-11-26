<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/checkFolderExist', 'FoldersController@checkExist');

// // GitHubの認証ページに遷移するためのルーティング
// Route::get('login/github', 'Auth\LoginController@redirectToProvider');
// // GitHubの認証後に戻るためのルーティング
// Route::get('/login/callback/github', 'Auth\LoginController@handleProviderCallback');


Route::get('{any}', function () {
  return view('index');
})->where('any', '.*')->middleware('auth');
