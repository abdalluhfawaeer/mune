<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCoutroller;
use App\Http\Controllers\MuneCoutroller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;

//Route::middleware('local.set')->get('/', function () {
//    return redirect('/' . app()->getLocale());
//})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/wc', function () {
    //    dd(app()->getLocale());
    //    app()->setlocale('ar');
        return view('welcome');
    });
Route::post('post-login', [AuthCoutroller::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [AuthCoutroller::class, 'logout'])->name('logout');

Route::controller(MuneCoutroller::class)->group(function () {
    Route::get('/mune/add', 'add');
    Route::get('/mune/edit/{id}', 'edit');
    Route::get('/mune/list', 'list');
    Route::get('/mune/customize', 'customize');
    Route::get('/mune/category', 'category');
    Route::get('/mune/add/item', 'addItem');
    Route::get('/mune/list/item', 'listItem');
    Route::get('/mune/item/edit/{id}', 'editItem');
});


Route::controller(FrontController::class)->group(function () {
    Route::get('/{name}/{id}', 'viwe');
    Route::get('/{name}/{id}/checkout', 'checkout');
    Route::get('/{name}/{id}/send', 'send');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/order', 'order');
    Route::get('/customer', 'customer');
    Route::get('/menu/order/today', 'orderToday');
    Route::get('/order/detail/{id}', 'orderDetail');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/add/sales', 'saels');
    Route::get('/admin/report/sales', 'saelsReport');
    Route::get('/admin/sales/edit/{id}', 'saelsEdit');
    Route::get('/admin/menu/report', 'menuReport');
    Route::get('/admin/menu/customer/{id}', 'menuCustomer');
    Route::get('/admin/menu/report/order/{id}', 'menuOrder');
});