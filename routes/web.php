<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\showAllNotes;

Route::get('/', function () {
    return view('welcome');
});

// // <<<<<<< HEAD
// Route::get('/home', function(){
//     return view('home');
// });
// //=======
Route::get('/notes', [NoteController::class, 'ShowAllNotesController']); 
Route::get('/notes/create', [NoteController::class, 'CreateNotesController']);
Route::post('/notes', [NoteController::class, 'StoreNotesController']); 
Route::get('/notes/{id}', [NoteController::class, 'ShowANoteController']);
Route::get('/notes/{id}/edit', [NoteController::class, 'EditNoteController']);
Route::put('/notes/{id}', [NoteController::class, 'UpdateNoteController']); 
Route::delete('/notes/{id}', [NoteController::class, 'DestroyNoteController']);
// >>>>>>> ec7d87da0e4386d49002693765bc1304034b419d
