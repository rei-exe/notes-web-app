<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/home/contributors', function(){
    return view('contributors');
});
Route::get('/home/about', function(){
    return view('about');
});
Route::get('/notes', [NoteController::class, 'showAllNotes']);
Route::get('/notes/create', [NoteController::class, 'Create']);
Route::post('/notes', [NoteController::class, 'store']);
Route::get('/notes/{id}', [NoteController::class, 'Read']);
Route::get('/notes/{id}/edit', [NoteController::class, 'Edit']);
Route::put('/notes/{id}', [NoteController::class, 'Update']);
Route::delete('/notes/{id}', [NoteController::class, 'Delete']);
