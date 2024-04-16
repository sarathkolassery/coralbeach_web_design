<?php

use App\Http\Controllers\PermissionController;
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

// Route::get('/permissions', function () {
//     return view('admin.permissions');
// });

Route::get('/permissions',[PermissionController::class,'index'])->name('permissions');

Route::get('/roles', function () {
    return view('admin.roles');
});

Route::post('/permissions/submit',[PermissionController::class,'store'])->name('submitpermissions');

Route::get('/permissions/edit/{id}',[PermissionController::class,'edit'])->name('editpermissions');

Route::post('/permissions/update/{id}',[PermissionController::class,'update'])->name('updatepermissions');

Route::get('/permissions/delete/{id}',[PermissionController::class,'destroy'])->name('deletepermissions');