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
// Route::get('/notes', [NoteController::class, 'ShowAllNotes']); 
// Route::get('/notes/create', [NoteController::class, 'Create']);
// Route::post('/notes', [NoteController::class, 'Store']); 
// Route::get('/notes/{id}', [NoteController::class, 'Show']);
// Route::get('/notes/{id}/edit', [NoteController::class, 'Edit']);
// Route::put('/notes/{id}', [NoteController::class, 'Update']); 
// Route::delete('/notes/{id}', [NoteController::class, 'Destroy']);
// // >>>>>>> ec7d87da0e4386d49002693765bc1304034b419d
