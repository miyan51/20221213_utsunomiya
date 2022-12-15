<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'add']);
Route::post('/edit/{id}', [TodoController::class, 'edit']);
Route::post('/delete/{id}', [TodoController::class, 'delete']);