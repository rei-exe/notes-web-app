<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class ShowANoteController extends Controller
{
    public function show($id)
    {
        $note = Note::findOrFail($id); # fetch notes
        return view('view', compact('note')); # return a note
    }
}
