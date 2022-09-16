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
        if (!empty($menu)) {
            if ($this->check($request,$menu,'first')) {
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
        $addition = Addition::where('menu_id',$menu->id)->first();
        if (!empty($menu)) {
            if ($this->check($request,$menu,'ll')) {
                if ($addition->type == 'order') {
                    return view('gust.checkout' ,[
                        'name' => $request->id,
                        'id' => $request->id
                    ]);
                } else {
                    return view('gust.front' ,[
                        'name' => $request->id,
                        'id' => $request->id
                    ]);
                }
            } else {
                return view('ladeng');
            }
        } else {
            return view('ladeng');
        }
    }

    public function send(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        $addition = Addition::where('menu_id',$menu->id)->first();
        if (!empty($menu)) {
            if ($this->check($request,$menu,'ll')) {
                if ($addition->type == 'order') {
                    return view('gust.send' ,[
                        'name' => $request->id,
                        'id' => $request->id
                    ]);
                } else {
                    return view('gust.front' ,[
                        'name' => $request->id,
                        'id' => $request->id
                    ]);
                }
            } else {
                return view('ladeng');
            }
        } else {
            return view('ladeng');
        }
    }

    public function Contactus(Request $request) {
        $menu = Mune::where('name',$request->name)->where('id',$request->id)->first();
        $addition = Addition::where('menu_id',$menu->id)->first();
        if (!empty($menu)) {
            if ($this->check($request,$menu,'ll')) {
                if ($addition->type == 'order') {
                    return view('gust.contact-us' ,[
                        'name' => $request->id,
                        'id' => $request->id
                    ]);
                } else {
                    return view('gust.front' ,[
                        'name' => $request->id,
                        'id' => $request->id
                    ]);
                }
            } else {
                return view('ladeng');
            }
        } else {
            return view('ladeng');
        }
    }

    public function check(Request $request,$menu,$first) {
        $addition = Addition::where('menu_id',$menu->id)->first();
        $date = Carbon::parse($menu->end_date);
        $now = Carbon::now();
        if ($menu->staus == 'active' && !$date->lessThan($now)) {
            $counter = Counter::where('menu_id',$request->id)->first();
            $counter = empty($counter) ? 0 : $counter->counter;
            if ($first == 'first') {
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
            }
            $request->session()->put('color', $menu->color ?? 0);
            $request->session()->put('menu_id', $menu->id ?? 0);
            $request->session()->put('name', $menu->name ?? 0);
            $request->session()->put('img', $menu->logo ?? 0);

            return true;
        } else {
            return false;
        }
    }
}
