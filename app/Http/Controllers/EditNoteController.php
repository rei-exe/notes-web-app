<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class EditNoteController extends Controller
{
    public function edit($id)
    {
        $note = Note::findOrFail($id); # fetch for editing
        return view('edit', compact('note')); # return edit view
    }
}
