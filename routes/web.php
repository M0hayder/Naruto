<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => 90000,
            ],
            [
                'id' => 2,
                'title' => 'Data Scientist',
                'salary' => 95000,
            ],
            [
                'id' => 3,
                'title' => 'Product Manager',
                'salary' => 105000,
            ],
            [
                'id' => 4,
                'title' => 'Web Developer',
                'salary' => 80000,
            ],
            [
                'id' => 5,
                'title' => 'UX Designer',
                'salary' => 75000,
            ],
            [
                'id' => 6,
                'title' => 'DevOps Engineer',
                'salary' => 100000,
            ],
            [
                'id' => 7,
                'title' => 'Systems Analyst',
                'salary' => 85000,
            ],
            [
                'id' => 8,
                'title' => 'Project Coordinator',
                'salary' => 65000,
            ],
            [
                'id' => 9,
                'title' => 'Database Administrator',
                'salary' => 90000,
            ],
            [
                'id' => 10,
                'title' => 'Network Engineer',
                'salary' => 88000,
            ],
        ]
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => 90000,
            ],
            [
                'id' => 2,
                'title' => 'Data Scientist',
                'salary' => 95000,
            ],
            [
                'id' => 3,
                'title' => 'Product Manager',
                'salary' => 105000,
            ],
            [
                'id' => 4,
                'title' => 'Web Developer',
                'salary' => 80000,
            ],
            [
                'id' => 5,
                'title' => 'UX Designer',
                'salary' => 75000,
            ],
            [
                'id' => 6,
                'title' => 'DevOps Engineer',
                'salary' => 100000,
            ],
            [
                'id' => 7,
                'title' => 'Systems Analyst',
                'salary' => 85000,
            ],
            [
                'id' => 8,
                'title' => 'Project Coordinator',
                'salary' => 65000,
            ],
            [
                'id' => 9,
                'title' => 'Database Administrator',
                'salary' => 90000,
            ],
            [
                'id' => 10,
                'title' => 'Network Engineer',
                'salary' => 88000,
            ],
        ];

        $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

  if($job != null){
      
      return view('job', ['job' => $job]);
  }else{
      abort(404);
  }
});

Route::get('/contact', function () {
    return view('contact');
});
