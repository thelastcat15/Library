<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\RedirectIfAuthenticated;

// หน้า Welcome
Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('auth:librarians')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::post('/books/getdata', [BookController::class, 'getdata'])->name('books.getdata');
        Route::delete('/books/delete', [BookController::class, 'destroy'])->name('books.destroy');
        Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
        Route::post('/books/edit', [BookController::class, 'edit'])->name('books.edit');
    });

    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login']);
    
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});

