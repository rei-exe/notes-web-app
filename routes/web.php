<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\showAllNotes;

Route::get('/', function () {
    return view('welcome');
});

// <<<<<<< HEAD
Route::get('/home', function(){
    return view('home');
});
//=======
Route::get('/notes', [NoteController::class, 'showAllNotes']); 
Route::get('/notes/create', [NoteController::class, 'create']);
Route::post('/notes', [NoteController::class, 'store']); 
Route::get('/notes/{id}', [NoteController::class, 'show']);
Route::get('/notes/{id}/edit', [NoteController::class, 'edit']);
Route::put('/notes/{id}', [NoteController::class, 'update']); 
Route::delete('/notes/{id}', [NoteController::class, 'destroy']);
// >>>>>>> ec7d87da0e4386d49002693765bc1304034b419d
