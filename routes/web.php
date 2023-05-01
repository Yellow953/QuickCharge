<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::post('/contact_us', [App\Http\Controllers\HomeController::class, 'contact_us']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);