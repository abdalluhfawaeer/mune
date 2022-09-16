<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCoutroller;
use App\Http\Controllers\MuneCoutroller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('lading');
});

Route::middleware('lang')->get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/wc', function () {
        return view('welcome');
});
Route::post('post-login', [AuthCoutroller::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [AuthCoutroller::class, 'logout'])->name('logout');
Route::get('/lang/{lang}', [AuthCoutroller::class, 'lang']);
Route::middleware('lang')->get('change-password', [AuthCoutroller::class, 'changePassword']);

Route::middleware('lang')->controller(MuneCoutroller::class)->group(function () {
    Route::get('/mune/add', 'add');
    Route::get('/mune/edit/{id}', 'edit');
    Route::get('/mune/list', 'list');
    Route::get('/mune/customize', 'customize');
    Route::get('/mune/category', 'category');
    Route::get('/mune/category/edit/{id}', 'editcategory');
    Route::get('/mune/add/item', 'addItem');
    Route::get('/mune/add/category', 'addcategory');
    Route::get('/mune/list/item', 'listItem');
    Route::get('/mune/item/edit/{id}', 'editItem');
    Route::get('/click/mune/show', 'showMenu');
});


Route::middleware('lang')->controller(FrontController::class)->group(function () {
    Route::get('/{name}/{id}', 'viwe')->name('showMenu');
    Route::get('/{name}/{id}/checkout', 'checkout');
    Route::get('/{name}/{id}/send', 'send');
    Route::get('/{name}/{id}/contact-us', 'Contactus');
});

Route::middleware('lang')->controller(OrderController::class)->group(function () {
    Route::get('/order', 'order');
    Route::get('/customer', 'customer');
    Route::get('/menu/order/today', 'orderToday');
    Route::get('/order/detail/{id}', 'orderDetail');
});

Route::middleware('lang')->controller(AdminController::class)->group(function () {
    Route::get('/admin/add/sales', 'saels');
    Route::get('/admin/report/sales', 'saelsReport');
    Route::get('/admin/sales/edit/{id}', 'saelsEdit');
    Route::get('/admin/menu/report', 'menuReport');
    Route::get('/admin/menu/category-item', 'categoryItem');
    Route::get('/admin/menu/customer/{id}', 'menuCustomer');
    Route::get('/admin/menu/report/order/{id}', 'menuOrder');
    Route::get('/admin/report/customer', 'customerReport');
});