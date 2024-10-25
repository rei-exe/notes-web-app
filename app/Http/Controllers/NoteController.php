<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    # show all notes / landing page
    #Hello
    public function showAllNotes()
    {
        $notes = Note::all(); # fetch notes from db
        return view('home', ['notes' => $notes]); // return notes to view
    }

    # create note
    public function Create()
    {
        return view('create-note');
    }

    # save note
    public function store(Request $request)
    {
       #validation
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'content' => 'required|max:10000',
        ]);

        Note::create($request->all()); # validated data becomes notes

        return redirect('/notes'); # redirects to landing page
    }

    # show a note
    public function Read($id)
    {
        $note = Note::findOrFail($id); # fetch notes
        return view('chosen-note', ['note' => $note]); # return a note
    }

    # edit note
    public function Edit($id)
    {
        $note = Note::findOrFail($id); # fetch for editing
        return view('edit-chosen-note', ['note' => $note]); # return edit view
    }

    # save edited note
    public function Update(Request $request, $id)
    {
        # validation
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'content' => 'required|max:10000',
        ]);

        $note = Note::findOrFail($id); # fetch note
        $note->update($request->all()); # update note

        return redirect()->route('Read', ['id' => $note->id])->with('success'); # redirects to landing page
    }

    # delete note
    public function Delete($id)
    {
        $note = Note::findOrFail($id); # fetch note

        if($note){
            $note->delete(); # delete note
        }
        return redirect()->route('showAllNotes')->with('success'); # redirects to landing page
    }
}
