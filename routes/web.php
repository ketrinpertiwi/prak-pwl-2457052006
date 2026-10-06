<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/user');
});

Route::get('/profile', [ProfileController::class, 'profile']);

// User
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::post('/user', [UserController::class, 'store'])
    ->name('user.store');

Route::get('/user/{id}/edit', [UserController::class, 'edit']);

Route::put('/user/{id}', [UserController::class, 'update']);

Route::delete('/user/{id}', [UserController::class, 'destroy']);

// Mata Kuliah
Route::get('/matakuliah', [MataKuliahController::class, 'index']);

Route::get('/matakuliah/create', [MataKuliahController::class, 'create']);

Route::post('/matakuliah', [MataKuliahController::class, 'store']);