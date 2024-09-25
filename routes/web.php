<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ApplicantController;
use App\Models\Barangay;
use App\Models\City;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/welcome', function () {
    return view('welcome');
});



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

// Route::get('/regions/{region}',[AddressController::class, 'getProvinces']);

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/register/applicant', [ApplicantController::class, 'create'])->name('applicant.register');
