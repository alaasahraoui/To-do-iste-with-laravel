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

Route::get('/', function () {
    return view('welcome');
});
//auth routes
Auth::routes();
Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/profile', 'UserController@update_avatar');
//->name('update_avatar');
//end auth routs
Route::get('/home', 'HomeController@index')->name('home');

//projects routes
                 //index
//Route::get('/project', 'ProjectController@index');
                 //store
//Route::post('/project', 'ProjectController@store');

//Route::get('/project/create', 'ProjectController@create');
Route::resource('project', 'ProjectController')->middleware('auth');
//tasks
Route::post('/project/{project}/tasks', 'ProjectTasksController@store')->middleware('auth');
Route::patch('/tasks/{task}', 'ProjectTasksController@update')->middleware('auth');
