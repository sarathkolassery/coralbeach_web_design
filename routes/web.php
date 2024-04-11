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
    return view('ui.portfolio');
});

Route::get('/blog', function () {
    return view('ui.blog');
});

Route::get('/contact', function () {
    return view('ui.contact');
});

// ======================== ADMIN ========================

Route::get('/cbadmin', function () {
    return view('admin.index');
});

