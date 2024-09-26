<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('About');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('Contact Us');
Route::get('/application', [App\Http\Controllers\HomeController::class, 'application'])->name('Application');

Route::post('/contact', [App\Http\Controllers\HomeController::class, 'postContact'])->name('contact');
Route::post('/apply', [ApplicationController::class, 'store'])->name('application.store');

