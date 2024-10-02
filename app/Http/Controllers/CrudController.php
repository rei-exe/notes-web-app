<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function Create(Request $request){
        $create = $request->create('');
        return view('xriber', ['create'=>$create]);
    }

    public function Read(){
        return view('');
    }

    public function Update(){
        return view('');
    }

    public function Delete(){
        return view('');
    }
}
