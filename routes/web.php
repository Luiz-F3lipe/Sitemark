<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use \App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::post('/logout', LogoutController::class)->name('logout');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/profile', ProfileController::class)->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/link', [LinkController::class, 'store'])->name('link.store');

    Route::middleware('can:protectedLink,link')->group(function() {
        Route::get('/link/{link}/edit', [LinkController::class, 'edit'])->name('link.edit');
        Route::put('/link/{link}', [LinkController::class, 'update'])->name('link.update');
        Route::delete('/link/{link}', [LinkController::class, 'destroy'])->name('link.destroy');
        Route::patch('/link/{link}/up', [LinkController::class, 'up'])->name('link.up');
        Route::patch('/link/{link}/down', [LinkController::class, 'down'])->name('link.down');
    });
});

