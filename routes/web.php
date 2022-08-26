<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Http;



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

// Route::get('/', function () {
// return view('home/home');
// });

Route::get('/', function () {

    // $ID_logado = null;
    // setCookie_logado($ID_logado);

    $api = Http::get('http://127.0.0.1:8090/produtos');
    $results = $api->json();

    return view('home.home', compact('results'));

    
    return view('home.home');
});


// Route::match(['get','post'], 'home', [ HomeController::class, 'home'])
//     ->name('home/home');




Route::get('/login', function () {
    return view('login.login');
});

// Route::match(['get', 'post'], 'login', [ UsersController::class, 'login'])
//     ->name('login/login');

Route::match(['get','post'], 'user', [ UsersController::class, 'user'])
    ->name('login/user');

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/pay', function () {
    return view('pay.pay');
});

Route::get('/error', function () {
    return view('/error');
});



