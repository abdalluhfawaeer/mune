<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

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

    public function menuCustomer(Request $request) {
        return view('admin.customer-report',[
            'id' => $request->id
        ]);
    }

    public function menuOrder(Request $request) {
        return view('admin.order-report',[
            'id' => $request->id
        ]);
    }

    public function customerReport() {
        return view('admin.menu-customer');
    }

    public function categoryItem() {
        return view('admin.category-item');
    }

    public function contact() {
        return view('contact.contact');
    }

    public function contactSales() {
        return view('contact.sales');
    }

    public function contactMenu() {
        return view('contact.menu');
    }
}
