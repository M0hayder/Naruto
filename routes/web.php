<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/{id}', function ($id) {


    $job = Job::Find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
