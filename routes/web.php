<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#showing all Notes
Route::get('/notes', [NoteController::class, 'showAllNotes']);

#creating notes
Route::get('/notes/create', [NoteController::class, 'Create']);

#after creating notes it'll store it to the database
Route::post('/notes', [NoteController::class, 'store']);

#reading only one note
Route::get('/notes/{id}', [NoteController::class, 'Read']);

#updating notes through editing
Route::get('/notes/{id}/edit', [NoteController::class, 'Edit']);

#after done editing the data will be overrided
Route::put('/notes/{id}', [NoteController::class, 'Update']);

#this will delete the data from the database
Route::delete('/notes/{id}', [NoteController::class, 'Delete']);
