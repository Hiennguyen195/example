<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register_store');

// Login
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login_store');

// Route::controller('JobController')->group(function () {
//     Route::get('/jobs',  'index')->name('job_listings');
//     Route::get('/jobs/create',  'create')->name('create_job');
//     Route::get('/jobs/{job}',  'show')->name('job_details');
//     Route::post('/jobs',  'store')->name('job_store');
//     Route::get('/jobs/{job}/edit',  'edit')->name('job_edit');
//     Route::patch('/jobs/{job}',  'update')->name('job_update');
//     Route::delete('/jobs/{job}',  'destroy')->name('job_delete');
// });


