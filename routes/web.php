<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::resource('jobs', JobController::class);

// Route::controller('JobController')->group(function () {
//     Route::get('/jobs',  'index')->name('job_listings');
//     Route::get('/jobs/create',  'create')->name('create_job');
//     Route::get('/jobs/{job}',  'show')->name('job_details');
//     Route::post('/jobs',  'store')->name('job_store');
//     Route::get('/jobs/{job}/edit',  'edit')->name('job_edit');
//     Route::patch('/jobs/{job}',  'update')->name('job_update');
//     Route::delete('/jobs/{job}',  'destroy')->name('job_delete');
// });


