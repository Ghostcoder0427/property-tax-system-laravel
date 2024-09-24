<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/register', [ApplicantController::class, 'index'])->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::resource('/register', RegisterController::class);

Route::post('/register/applicant', [ApplicantController::class, 'create'])->name('applicant.register');
