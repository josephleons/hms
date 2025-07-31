<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use App\Models\Appointment;

Route::get('/', [AuthController::class, 'index'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('auth.logout', [AuthController::class, 'logout']);
Route::resource('auth', AuthController::class);
Route::get('auth.index', [AuthController::class, 'index']);
// Route::get('auth.login', [AuthController::class, 'login']);


Route::resource('admin', AdminController::class);
Route::resource('doctors', DoctorController::class);
Route::get('/appointment', [DoctorController::class, 'appointment']);

Route::resource('patients', PatientController::class);
Route::get('/appointment', [PatientController::class, 'appointment']);

Route::resource('appointments', AppointmentController::class);
Route::resource('users', UserController::class);
Route::resource('hospitals', HospitalController::class);