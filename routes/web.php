<?php

use App\Http\Controllers\welcomeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::resource('/', welcomeController::class);
Route::resource('home', welcomeController::class);
Route::resource('about', aboutController::class);
Route::resource('contact', contactController::class);

Route::resource('admin/form', formController::class);