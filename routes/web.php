<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greating' => 'Hello']);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
