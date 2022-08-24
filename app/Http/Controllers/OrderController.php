<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        return view('order.order');
    }

    public function customer(Request $request)
    {
        return view('order.customer');
    }

    public function orderToday(Request $request)
    {
        return view('order.order-today');
    }

    public function orderDetail(Request $request)
    {
        return view('order.order-detail',[
            'id' => $request->id
        ]);
    }
}
