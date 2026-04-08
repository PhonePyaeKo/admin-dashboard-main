<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'index'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'index'])->name('contactus');
Route::get('/blog', [HomeController::class, 'index'])->name('blog');