<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuneCoutroller extends Controller
{
    public function add() {
        return view('mune.add');
    }
}
