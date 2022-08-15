<?php

namespace App\Http\Controllers;

use App\Models\Mune;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function viwe(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        if (!empty($menu)) {
            if ($menu->staus == 'active') {
                return view('gust.front' ,[
                    'name' => $request->id,
                    'id' => $request->id
                ]);
            } else {
                return view('ladeng');
            }
        } else {
            return view('ladeng');
        }
    }
}
