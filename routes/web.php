<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/vote', function () {
    return view('vote');
});

Route::get('/register', function () {
    return view('register');
});

route:: get('/register',[UserController::class, 'index'])->name('register.index');
route:: get('/login',[UserController::class, 'login'])->name('login');
route:: post('/register',[UserController::class, 'store'])->name('register.store');