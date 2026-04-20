<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'index'])->name('aboutus');
Route::get('/portfolio', [HomeController::class, 'index'])->name('portfolio');
Route::get('/packages', [HomeController::class, 'index'])->name('packages');
Route::get('/contactus', [HomeController::class, 'index'])->name('contactus');