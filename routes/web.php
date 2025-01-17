<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('patients', PatientController::class);

//route untuk kelola pasien
//Route::get('/patients', action: [PatientController::class, 'index'])->name('patients.index');
//Route::get('/patients/create', action: [PatientController::class, 'create'])->name('patients.create');
//Route::get('/patients', action: [PatientController::class, 'store'])->name('patients.store');


// Middleware untuk admin
//membatasi akses selain admin tidak bisa akses
//Route::middleware('role:Admin')->group(function () {
    //Route::get('/users', [PatientController::class, 'index']);
    //Route::post('/users', [PatientController::class, 'store']);
    //Route::delete('/users/{id}', [PatientController::class, 'destroy']);
//});

// Middleware untuk dokter
//Route::middleware('role:Doctor')->group(function () {
    //Route::put('/patients/{id}', [PatientController::class, 'update']);
//});
