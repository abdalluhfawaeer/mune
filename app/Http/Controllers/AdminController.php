<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function saels() {
        return view('admin.saels');
    }
    
    public function saelsReport() {
        return view('admin.saels-eport');
    }

    public function saelsEdit(Request $request) {
        return view('admin.saels-edit',[
            'id' => $request->id
        ]);
    }

    public function menuReport(Request $request) {
        return view('admin.menu-report');
    }
}
