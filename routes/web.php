<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCoutroller;
use App\Http\Controllers\MuneCoutroller;
use App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::middleware('local.set')->get('/', function () {
//    return redirect('/' . app()->getLocale());
//})->name('home');

Route::get('/login', function () {
    return view('login');
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
});