<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');

    Route::get('/roles', function () {
        return view('admin.roles');
    });

    Route::get('/roles', [RoleController::class, 'index'])->name('viewroles');

    Route::post('/roles/submit', [RoleController::class, 'store'])->name('submitroles');

    Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('editroles');

    Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('updateroles');

    Route::get('/roles/delete/{id}', [RoleController::class, 'destroy'])->name('deleteroles')->middleware('permission:delete_role');

    Route::get('/roles/permissions/view/{id}', [RoleController::class, 'addpermissionntorolesview'])->name('viewrolepermissions');
    
    Route::post('/roles/givepermissions/{id}', [RoleController::class, 'givepermissiontorole'])->name('permissiontoroles');

    Route::post('/permissions/submit', [PermissionController::class, 'store'])->name('submitpermissions');

    Route::get('/permissions/edit/{id}', [PermissionController::class, 'edit'])->name('editpermissions');

    Route::post('/permissions/update/{id}', [PermissionController::class, 'update'])->name('updatepermissions');

    Route::get('/permissions/delete/{id}', [PermissionController::class, 'destroy'])->name('deletepermissions');

    Route::get('/users', [UserController::class, 'index'])->name('viewusers');
});

require __DIR__ . '/auth.php';
