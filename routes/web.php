<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HasilController;
use Illuminate\Support\Facades\Route;


Route::resource("/", HomeController::class);
Route::resource("hasil", HasilController::class);
Route::resource("daftar", DaftarController::class);



