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

route:: get('/register',[UserController::class, 'TampilRegister'])->name('register.Tampil');
route:: post('/register',[UserController::class, 'SubmitRegistrasi'])->name('register.submit');

route:: get('/home',[UserController::class, 'TampilHome'])->name('home.Tampil');
route:: get('/vote',[UserController::class, 'TampilVote'])->name('vote.Tampil');

route:: get('/login',[UserController::class, 'TampilLogin'])->name('login.tampil');
route:: post('/login',[UserController::class, 'SubmitLogin'])->name('login.submit');