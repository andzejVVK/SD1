<?php
//ODKRYWANIE NOWYCH LINKOW
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::resource('conference', ConferenceController::class);
Route::resource('users', UserController::class);
Route::resource('admins', AdminController::class);


Route::get('/conference', [ConferenceController::class, 'showConference'])->name('conference');
Route::get('/login', [ConferenceController::class, 'login'])->name('login');
Route::get('/register', [ConferenceController::class, 'register'])->name('register');
Route::get('/startconference', [ConferenceController::class, 'startconference'])->name('startconference');
Route::get('/addpeople', [ConferenceController::class, 'addpeople'])->name('addpeople');
Route::get('/apieusers', [ConferenceController::class, 'apieusers'])->name('apieusers');
Route::get('/apieadmins', [ConferenceController::class, 'apieadmins'])->name('apieadmins');
Route::get('/contac', [ConferenceController::class, 'contac'])->name('contac');
Route::get('/rules', [ConferenceController::class, 'rules'])->name('rules');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
