<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/team', function () {
    return view('team');
});

Route::get('/signin', function () {
    return view('signin');
});

