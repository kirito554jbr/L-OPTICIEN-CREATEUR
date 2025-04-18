<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RoleController;

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

Route::get('/Toregister', function () {
    return view('auth.register');
})->name('Toregister');

Route::get('/Tologin', function () {
    return view('auth.login');
})->name('Tologin');


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/role/create', [RoleController::class, 'create']);

Route::controller(ProduitController::class)->group(function () {
    Route::get('/produitAdmin', 'index')->name('produitAdmin');
    Route::post('/produitAdmin/create', 'create')->name('produit.create');
    Route::put('/produitAdmin/update/{id}', 'update')->name('produit.update');
    Route::delete('/produitAdmin/delete/{id}', 'delete')->name('produit.delete');
});