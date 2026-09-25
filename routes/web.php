<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.list');

Route::post('/tasks', [TaskController::class, 'store'])
    ->name('tasks.store');

// Edit Task
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])
    ->name('tasks.edit');

// Update Task
Route::put('/tasks/{id}', [TaskController::class, 'update'])
    ->name('tasks.update');

// Delete Task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');
