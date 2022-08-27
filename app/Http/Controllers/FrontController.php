<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Mune;
use App\Models\Viwe;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function viwe(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        if (!empty($menu)) {
            if ($menu->staus == 'active') {
                $counter = Counter::where('menu_id',$request->id)->first();
                $counter = empty($counter) ? 0 : $counter->counter;
                Counter::updateOrCreate([
                    'menu_id' => $request->id
                ],[
                    'counter' => ++$counter,
                    'menu_id' => $request->id
                ]);
                Viwe::updateOrCreate([
                    'ip_address' => $request->ip()
                ],[
                    'ip_address' => $request->ip(),
                    'menu_id' => $request->id
                ]);
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

    public function checkout(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        if (!empty($menu)) {
            if ($menu->staus == 'active') {
                return view('gust.checkout' ,[
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

    public function send(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        if (!empty($menu)) {
            if ($menu->staus == 'active') {
                return view('gust.send' ,[
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
