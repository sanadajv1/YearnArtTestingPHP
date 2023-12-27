<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Front Page*/
Route::get('/', function () {
    return view('YearnArt.Signup');
});

Route::get('/About', function () {
    return view('YearnArt.About');
});

Route::get('/Login', function () {
    return view('YearnArt.Login');
});

Route::get('/Signup', function () {
    return view('YearnArt.Signup');
});

Route::get('/FAQ', function () {
    return view('YearnArt.FAQ');
});

Route::get('/Home', function () {
    return view('YearnArt.Home');
});

Route::get('/MyOrders', function () {
    return view('YearnArt.MyOrders');
});

Route::get('/Products', function () {
    return view('YearnArt.Products');
});




