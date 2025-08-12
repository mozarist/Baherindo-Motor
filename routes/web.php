<?php

use App\Http\Controllers\welcomeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BikeController;

use App\Http\Controllers\motorController;
use App\Http\Controllers\MobilController;


use Illuminate\Support\Facades\Route;

Route::resource('/', welcomeController::class);
Route::resource('home', welcomeController::class);
Route::resource('about', aboutController::class);
Route::resource('contact', contactController::class);
Route::resource('car', carController::class);
Route::resource('bike', BikeController::class);

Route::resource('mobil', MobilController::class);
Route::resource('motor', motorController::class);