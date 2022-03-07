<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController5 extends Controller
{
    public $data = [];

    public function getAddForm(){
        return view('clients.add', $this->data);
    }
}
