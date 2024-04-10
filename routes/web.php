<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ui.index');
});

Route::get('/about', function () {
    return view('ui.about');
});

Route::get('/services', function () {
    return view('ui.services');
});

Route::get('/portfolio', function () {
    return view('ui.services');
});

Route::get('/contact', function () {
    return view('ui.contact');
});