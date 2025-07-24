<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);

Route::get('auth', [AuthController::class, 'index']);
Route::post('auth', [AuthController::class, 'login'])->name('auth.login');
Route::post('store', [AuthController::class, 'store']);



Route::resource('candidate', CandidateController::class);
Route::resource('admin', AdminController::class);
Route::resource('editor', EditorController::class);
Route::resource('users', UserController::class);
Route::resource('jobs', JobController::class);
Route::resource('applications', ApplicationController::class);