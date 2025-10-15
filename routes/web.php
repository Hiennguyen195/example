<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('home');

})->name('home');

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs', ['jobs' => $jobs]);
})->name('jobs_listing');

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
})->name('job_details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');