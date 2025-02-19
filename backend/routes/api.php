<?php

use App\Http\Controllers\CpuController;
use App\Http\Controllers\MotherboardController;
use Illuminate\Support\Facades\Route;

Route::apiResource('motherboards', MotherboardController::class);
Route::apiResource('cpus', CpuController::class);
