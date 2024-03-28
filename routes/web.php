<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::resource('conferences', ConferenceController::class);









// no idea kodel ne veikia
// Route::get('/conferences', 'ConferenceController@index'); // all conference list
// Route::post('/conferences', 'ConferenceController@store'); // create a conference
// Route::put('/conferences/{conference}', 'ConferenceController@update'); // conference konfig
// Route::delete('/conferences/{conference}', 'ConferenceController@destroy'); // delete conference

// user marsrutai
// Route::get('/users', 'UserController@index'); // all user marsrutai
// Route::put('/users/{user}', 'UserController@update'); // user informatio config
