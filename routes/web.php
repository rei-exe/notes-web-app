<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#showing all Notes
Route::get('/notes', [NoteController::class, 'showAllNotes'])->name('showAllNotes');

#creating notes
Route::get('/notes/create', [NoteController::class, 'Create'])->name('Create');

#after creating notes it'll store it to the database
Route::post('/notes', [NoteController::class, 'store'])->name('store');

#reading only one note
Route::get('/notes/{id}', [NoteController::class, 'Read'])->name('Read');

#updating notes through editing
Route::get('/notes/{id}/edit', [NoteController::class, 'Edit'])->name('Edit');

#after done editing the data will be overrided
Route::put('/notes/{id}', [NoteController::class, 'Update'])->name('Update');

#this will delete the data from the database
Route::delete('/notes/{id}/', [NoteController::class, 'Delete'])->name('Delete');

Route::get('/tasks', [TaskController::class, 'showTasks'])->name('showTasks');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task-create');
Route::post('/tasks', [TaskController::class, 'store'])->name('task-store');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('task-edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('task-update');
Route::delete('/tasks/{task}', [TaskController::class, 'delete'])->name('task-delete');