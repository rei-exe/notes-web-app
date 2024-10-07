<?php

namespace App\Http\Controllers;

use App\Models\Note;

class DestroyNoteController extends Controller
{
    public function destroy($id)
    {
        $note = Note::findOrFail($id); # fetch note
        $note->delete(); # delete note
        return redirect('/notes'); # redirects to landing page
    }
}
