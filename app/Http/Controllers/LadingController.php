<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Mune;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LadingController extends Controller
{
    public function index() {
        // $menu = Mune::where('staus','active')->get();
        // return view('lading.lading',['menu'=>$menu]);
        return view('comming-soon');
    }

    public function sales() {
        return view('lading.add-sales');
    }

    public function menu($type) {
        return view('lading.send-menu',[
            'type' => $type
        ]);
    }

    public function send(Request $request) {
        Contact::create([
            'mobile' => $request->mobile,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'masg'=> $request->message,
            'name'=> $request->name,
            'created_at'=> Carbon::now(),
            'type' => '',
            'status' => 'contact',
        ]);

        return 'تم الارسال بنجاح سيتم التواصل معك في اقرب وقت ممكن';
    }

    public function addSales(Request $request) {
        $mobile_e = User::where('mobile',$request->mobile)->count();
        if ($mobile_e > 0) {
            return 'رقم الهاتف مستخدم من قبل';
        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 'sales_send',
                'mobile' => $request->mobile,
                'country' => $request->country,
                'state' => $request->state,
                'staus' => 'not_active',
                'created_at'=> Carbon::now(),
            ]);
    
            return 'تم الارسال بنجاح سيتم التواصل معك في اقرب وقت ممكن';
        }
    }

    public function addMenu(Request $request) {
        Contact::create([
            'mobile' => $request->mobile,
            'email'=> $request->email,
            'subject'=> $request->country,
            'masg'=> $request->state,
            'name'=> $request->name,
            'created_at'=> Carbon::now(),
            'type' => $request->type,
            'status' => 'menu',
        ]);

        return 'تم الارسال بنجاح سيتم التواصل معك في اقرب وقت ممكن';
    }
}
