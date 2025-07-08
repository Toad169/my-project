<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
