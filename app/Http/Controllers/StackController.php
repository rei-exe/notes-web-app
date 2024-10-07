<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsEmpty;

class StackController extends Controller
{
    private $id;

    public function __construct(){
        $this->id = [];
    }

    public function Push($item){
        array_push($this->id, $item);
    }

    public function Pop(){
        if(empty($this->id)){
            return null;
        }
        return array_pop($this->id);
    }

    public function Peek(){
        if(empty($this->id)){
            return null;
        }
        return end($this->id);
    }
}
