<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\RendezVousController;

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
})->name('main');

// Route::get('/ProduitClient', function () {
//     return view('Client.produit');
// });

Route::get('/ProduitClient', [ProduitController::class, 'indexClient'])->name('produitClient');

Route::get('/dashboardAdmin', function () {
    return view('Admin.dashboard');
});


Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profileImage', [UserController::class, 'updateProifileImage'])->name('profileImage');


Route::get('/produitAdmin', function () {
    return view('Admin.produit');
});

// Route::get('/rendez_Vous', function () {
//     return view('Client.rendez_vous');
// });

Route::get('/categoryAdmin', function () {
    return view('Admin.categorie');
})->name("ToCategorie");

Route::get('/Toregister', function () {
    return view('auth.register');
})->name('Toregister');

Route::get('/Tologin', function () {
    return view('auth.login');
})->name('Tologin');


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});


Route::get('/role/create', [RoleController::class, 'create']);

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users');
    Route::post('/users/create', 'create')->name('user.create');
    Route::post('/users/update/{id}', 'update')->name('user.update');
    Route::post('/users/delete/{id}', 'delete')->name('user.delete');
});




Route::controller(ProduitController::class)->group(function () {
    Route::get('/produitAdmin', 'index')->name('produitAdmin');
    Route::post('/produitAdmin/create', 'create')->name('produit.create');
    Route::post('/produitAdmin/update/{id}', 'update')->name('produit.update');
    Route::post('/produitAdmin/delete/{id}', 'delete')->name('produit.delete');
});


Route::controller(CategorieController::class)->group(function () {
    Route::get('/categorie', 'index')->name('categorie');
    Route::post('/categorie/create', 'create')->name('categorie.create');
    Route::post('/categorie/update/{id}', 'update')->name('categorie.update');
    Route::post('/categorie/delete/{id}', 'delete')->name('categorie.delete');
});



Route::controller(RendezVousController::class)->group(function () {
    Route::get('/rendezVous', 'index')->name('rendezVous');
    Route::get('/rendez_vous', 'ClientIndex')->name('ClientIndex');
    Route::post('/rendezVous/create', 'create')->name('rendezVous.create');
    Route::post('/rendezVous/update/{id}', 'update')->name('rendezVous.update');
    Route::post('/rendezVous/delete/{id}', 'delete')->name('rendezVous.delete');
});