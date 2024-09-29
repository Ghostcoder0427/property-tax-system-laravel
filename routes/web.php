<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ApplicantController;
use App\Models\Barangay;
use App\Models\City;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Support\Facades\Route;

// To Route Index (index.blade.php)
Route::get('/', function () {
    return view('index');
})->name('index');

// To Route Login (login.blade.php)
Route::get('/login', function () {
    return view('login');
});

//From index page to register page
Route::get('/register', [ApplicantController::class, 'index'])->name('register');

Route::get('/regions/{region_code}', function ($region_code) {
    $region = Region::where('region_code', $region_code)->first();

    return response()->json($region->provinces);
});

Route::get('/provinces/{province_code}', function ($province_code) {
    $province = Province::where('province_code', $province_code)->with('cities')->first();

    return response()->json($province->cities);
});

Route::get('/cities/{city_code}', function ($city_code) {
    // Fetch barangays associated with the selected city
    $barangays = Barangay::where('city_municipality_code', $city_code)->get();

    return response()->json($barangays);
});


Route::post('/register/applicant', [ApplicantController::class, 'create'])->name('applicant.register');

Route::prefix('applicant')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('applicant.dashboard-applicant');
    })->name('applicant.dashboard');
});

Route::post('/login/applicant', [ApplicantController::class, 'login'])
    ->name('applicant.login');


// To Route Header (header.blade.php)
Route::get('/header', function () {
    return view('header');
});
