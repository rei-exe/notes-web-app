<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function showAllNotes()
    {
        $notes = Note::all();
        return view('xriber', ['notes' => $notes]); 
    }
}
