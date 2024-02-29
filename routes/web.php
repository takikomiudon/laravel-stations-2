<?php

use App\Http\Controllers\PracticeController;
use App\Http\Controllers\MovieController;

Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);
Route::get('/getPractice', [PracticeController::class, 'getPractice']);
Route::get('/admin/movies', [MovieController::class, 'movies']);
Route::get('/admin/movies/create', [MovieController::class, 'createMovie']);
Route::post('/admin/movies/store', [MovieController::class, 'storeMovie']);
Route::get('/admin/movies/{id}/edit', [MovieController::class, 'editMovie']);
Route::patch('/admin/movies/{id}/update', [MovieController::class, 'updateMovie']);
