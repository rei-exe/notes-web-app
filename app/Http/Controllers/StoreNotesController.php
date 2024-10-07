<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class StoreNotesController extends Controller
{
    public function store(Request $request)
    {
        # validation
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'content' => 'required|max:10000',
        ]);

        Note::create($request->all()); # validated data becomes notes

        return redirect('/notes'); # redirects to landing page
    }
}
