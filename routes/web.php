<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicController;

Route::get('/', [AcademicController::class, 'inicio']);


Route::get('/test', function () {
    return view('test');
});
