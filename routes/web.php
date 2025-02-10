<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TemperatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/temperature' , [TemperatureController::class, 'index']);
Route::post('/temperature' , [TemperatureController::class, 'show'])->name('temperature_show');
Route::resource('contacts', ContactsController::class);