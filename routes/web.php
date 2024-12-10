<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\voteController;
use App\Http\Controllers\QcountController;
use App\Http\Controllers\PembatasWaktu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/xcv4xvc4x', function () {
    return view('login');
});

Route::get('/v2hv3hjvh', function () {
    return view('vote');
});

Route::get('/look', function () {
    return view('look');
});

Route::get('/Fgh675ffyc', function () {
    return view('register');
});

// Route::get('/count', function () {
//     return view('count');
// });

Route::get('/end', function () {
    return view('end');
});

route:: get('/end',[voteController::class, 'tampilanAkhir'])->name('end.Tampil');

route:: get('/register',[UserController::class, 'TampilRegister'])->name('register.Tampil');
route:: post('/register',[UserController::class, 'SubmitRegistrasi'])->name('register.submit');

route:: get('/home',[UserController::class, 'TampilHome'])->name('home.Tampil');


route::get('/vote', [UserController::class, 'TampilVote'])->name('vote.Tampil');
Route::post('/vote', [voteController::class, 'submitVote'])->middleware('auth')->name('vote.submit');



route:: get('/count', [QcountController::class, 'quickCount']);

route:: get('/login',[UserController::class, 'TampilLogin'])->name('login.tampil');
route:: post('/login',[UserController::class, 'SubmitLogin'])->name('login.submit');
