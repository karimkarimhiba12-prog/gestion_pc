<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\UserController;

/*
|----------------------------------
| AUTH
|----------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|----------------------------------
| AUTH DASHBOARD
|----------------------------------
*/



/*
|----------------------------------
| ADMIN ROUTES (CLEAN)
|----------------------------------
*/

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {

    // dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // USERS
    Route::resource('users', UserController::class);

    // POSTES
    Route::resource('postes', PosteController::class);

});
