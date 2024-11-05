<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->paginate(2);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::post('/jobs', function () {

    request()->validate([
        'title' => 'required|max:2',
        'salary' => 'required|min:4',
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 5,
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{job}', fn(Job $job) => view('jobs.show', ['job' => $job]));

Route::get('/jobs/edit/{job}', fn(Job $job) => view('jobs.edit', ['job' => $job]));

Route::patch('/jobs/{job}', function (Job $job) {

    request()->validate([
        'title' => 'required',
        'salary' => 'required',
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 5,
    ]);

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (Job $job) {

    $job->delete();

    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});
