<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuneCoutroller extends Controller
{
    public function add() {
        return view('mune.add',[
            'id' => 0
        ]);
    }

    public function list() {
        return view('mune.list');
    }

    public function listItem() {
        return view('mune.list-item');
    }

    public function edit(Request $request) {
        return view('mune.add' ,[
            'id' => $request->id
        ]);
    }

    public function customize(Request $request) {
        return view('mune.customize' ,[
            'id' => $request->id
        ]);
    }

    public function category() {
        return view('mune.category');
    }

    public function addItem() {
        return view('mune.add-item');
    }

    public function editItem(Request $request) {
        return view('mune.item-edit' ,[
            'id' => $request->id
        ]);
    }
}
