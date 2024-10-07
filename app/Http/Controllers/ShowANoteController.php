<?php

namespace App\Http\Controllers;

use App\Models\Note;

class ShowANoteController extends Controller
{
    public function show($id)
    {
        $note = Note::findOrFail($id); # fetch notes
        return view('view', compact('note')); # return a note
    }
}
