<?php

namespace App\Http\Controllers;

use App\Models\Addition;
use App\Models\Counter;
use App\Models\Mune;
use App\Models\Viwe;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function viwe(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        $addition = Addition::where('menu_id',$menu->id)->first();
        $date = Carbon::parse($menu->end_date);
        $now = Carbon::now();
        if (!empty($menu)) {
            if ($menu->staus == 'active' && !$date->lessThan($now)) {
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
                $request->session()->put('theme', $addition->theme ?? 0);
                $request->session()->put('color', $menu->color ?? 0);
                $request->session()->put('menu_id', $menu->id ?? 0);
                return view('gust.front' ,[
                    'name' => $request->id,
                    'id' => $request->id
                ]);
            } else {
                return view('lading');
            }
        } else {
            return view('ladeng');
        }
    }

    public function checkout(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        if (!empty($menu)) {
            if ($menu->staus == 'active') {
                $request->session()->put('color', $menu->color ?? 0);
                $request->session()->put('menu_id', $menu->id ?? 0);
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
                $request->session()->put('color', $menu->color ?? 0);
                $request->session()->put('menu_id', $menu->id ?? 0);
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
