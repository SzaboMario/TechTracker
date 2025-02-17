<?php

use App\Http\Controllers\MotherboardController;
use Illuminate\Support\Facades\Route;

Route::apiResource('motherboards', MotherboardController::class);
