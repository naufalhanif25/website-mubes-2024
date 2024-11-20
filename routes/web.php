<?php

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
