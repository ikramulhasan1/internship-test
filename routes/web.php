<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('name');
Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');
