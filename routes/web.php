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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Client.index');
});

Route::get('/ProduitClient', function () {
    return view('Client.produit');
});

Route::get('/dashboardAdmin', function () {
    return view('Admin.dashboard');
});


Route::get('/produitAdmin', function () {
    return view('Admin.produit');
});

Route::get('/register', function () {
    return view('auth.register');
});