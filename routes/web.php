<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;


Route::get('/', function () {
    return view('home');
});

Route::get('/services', [ServicesController::class, 'index'])->name('services.page');
Route::get('/service-create', [ServicesController::class, 'create'])->name('service.create');

Route::post('/service-store', [ServicesController::class, 'store'])->name('service.store');

