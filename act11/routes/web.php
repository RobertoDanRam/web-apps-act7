<?php

use Illuminate\Support\Facades\Route;

// RobComics Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');