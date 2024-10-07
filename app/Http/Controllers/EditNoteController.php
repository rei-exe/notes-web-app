<?php

namespace App\Http\Controllers;

use App\Models\Note;


class EditNoteController extends Controller
{
    public function edit($id)
    {
        $note = Note::findOrFail($id); # fetch for editing
        return view('edit', compact('note')); # return edit view
    }
}
