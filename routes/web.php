<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\ContactController;

Route::get('/', [AcademicController::class, 'inicio'])->name('inicio');
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
