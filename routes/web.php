<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['jobs' => [
       
        [
            'title' => 'Software Engineer',
            'salary' => 90000,
        ],
        [
            'title' => 'Data Scientist',
            'salary' => 95000,
        ],
        [
            'title' => 'Product Manager',
            'salary' => 105000,
        ],
        [
            'title' => 'Web Developer',
            'salary' => 80000,
        ],
        [
            'title' => 'UX Designer',
            'salary' => 75000,
        ],
        [
            'title' => 'DevOps Engineer',
            'salary' => 100000,
        ],
        [
            'title' => 'Systems Analyst',
            'salary' => 85000,
        ],
        [
            'title' => 'Project Coordinator',
            'salary' => 65000,
        ],
        [
            'title' => 'Database Administrator',
            'salary' => 90000,
        ],
        [
            'title' => 'Network Engineer',
            'salary' => 88000,
        ],
    ]
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
