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
<<<<<<< HEAD
    return view('YearnArt.Home');
=======
    return view('YearnArt.Signup');
>>>>>>> parent of b72ae9c (login and registration)
});

Route::get('/About', function () {
    return view('YearnArt.About');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/FAQ', function () {
    return view('YearnArt.FAQ');
})->name('FAQ');

Route::get('/Products', function () {
    return view('YearnArt.Products');
})->name('Products');

Route::get('/About', function () {
    return view('YearnArt.About');
})->name('About');

Route::get('/MyOrders', function () {
    return view('YearnArt.MyOrders');
})->name('MyOrders');
=======
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



>>>>>>> parent of b72ae9c (login and registration)

