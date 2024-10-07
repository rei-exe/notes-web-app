<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class ShowAllNotesController extends Controller
{
    public function showAllNotes()
    {
        $notes = Note::all(); # fetch notes from db
        return view('xriber', ['notes' => $notes]); // return notes to view
    }
}
