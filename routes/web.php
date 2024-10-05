<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'showAllNotes']); 
Route::get('/notes/create', [NoteController::class, 'create']);
Route::post('/notes', [NoteController::class, 'store']); 
Route::get('/notes/{id}', [NoteController::class, 'show']);
Route::get('/notes/{id}/edit', [NoteController::class, 'edit']);
Route::put('/notes/{id}', [NoteController::class, 'update']); 
Route::delete('/notes/{id}', [NoteController::class, 'destroy']);