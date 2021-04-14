<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/car','namespace'=>'\App\Http\Controllers'], function () {
      Route::get('/', 'SiteController@renderindexPage');
      Route::post('/member/create', 'MemberController@create');
      Route::post('/member/login', 'MemberController@login');
      Route::get('/member', 'MemberController@member');
      Route::get('/member/edit', 'MemberController@edit');
      Route::patch('/member/updata', 'MemberController@updata');
      Route::get('/member/order', 'MemberController@order');
      Route::get('/member/loyout/car', 'MemberController@loyout');
      Route::post('/order', 'SiteController@order');
      Route::get('/text', 'MemberController@text');
      Route::get('/send', 'MemberController@sendMail');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
