<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HasilController;
use Illuminate\Support\Facades\Route;


Route::resource("beasiswa", BeasiswaController::class);
Route::resource("hasil", HasilController::class);
Route::resource("daftar", DaftarController::class);



