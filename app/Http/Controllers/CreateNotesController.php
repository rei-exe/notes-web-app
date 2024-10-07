<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateNotesController extends Controller
{
    public function create()
    {
        return view('create'); 
    }
}
