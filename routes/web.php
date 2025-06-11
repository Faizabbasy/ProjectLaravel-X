<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('template.nav');
// });


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/slide1', function () {
    return view('about');
})->name('about');

Route::get('/slide2', function () {
    return view('kontak');
})->name('kontak');
