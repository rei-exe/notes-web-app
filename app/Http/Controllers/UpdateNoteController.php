<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class UpdateNoteController extends Controller
{
    public function update(Request $request, $id)
    {
        # validation
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'content' => 'required|max:10000',
        ]);

        $note = Note::findOrFail($id); # fetch note
        $note->update($request->all()); # update note

        return redirect('/notes'); # redirects to landing page
    }
}
