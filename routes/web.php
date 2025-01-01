<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\RedirectIfAuthenticated;

// หน้า Welcome
Route::get('/', function () {
    return view('welcome');
});

// หน้า Admin (auth และ admin middleware)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Route อื่นๆ
});

// หน้า Login (RedirectIfAuthenticated middleware)
Route::middleware(RedirectIfAuthenticated::class)->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout (auth middleware)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
