<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCoutroller;
use App\Http\Controllers\MuneCoutroller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LadingController;
use App\Http\Controllers\OrderController;
use App\Models\Mune;

Route::get('/login', function () {
    return view('login');
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
Route::get('forgot-password', [AuthCoutroller::class, 'forgotPassword'])->name('forgot-password');
Route::get('forgot-password/{token}', [AuthCoutroller::class, 'forgotPasswordValidate']);
Route::post('forgot-password', [AuthCoutroller::class, 'resetPassword'])->name('forgot-password');
Route::put('reset-password', [AuthCoutroller::class, 'updatePassword'])->name('reset-password');

Route::middleware('lang')->controller(LadingController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/send/contact/lading', 'send');
    Route::post('/send/contact/sales', 'addSales');
    Route::post('/send/contact/menu', 'addMenu');
    Route::get('/add-sales', 'sales');
    Route::get('/send/menu/{type}', 'menu');
});

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
    Route::get('/admin/contact/contact', 'contact');
    Route::get('/admin/contact/sales', 'contactSales');
    Route::get('/admin/contact/menu', 'contactMenu');
});