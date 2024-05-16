<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('homepage');
Route::get('/contact', [TaskController::class, 'contact'])->name('contactpage');
