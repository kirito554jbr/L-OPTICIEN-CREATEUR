<?php

use App\Models\Produit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripeController;
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





// Route::get('/dashboardAdmin', function () {
//     return view('Admin.dashboard');
// });
Route::get('/dashboardAdmin', [AdminController::class, 'ashboard'])->name('dashboardAdmin')->middleware('role:Admin');

Route::get('/unauthorized', function () {
    return view('errors.unauthorized'); // You can customize this view
});

Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profileImage', [UserController::class, 'updateProfileImage'])->name('profileImage');


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
    Route::get('/users', 'index')->name('users')->middleware('role:Admin');
    Route::post('/users/create', 'create')->name('user.create');
    Route::post('/users/update/{id}', 'update')->name('user.update');
    Route::post('/users/profileUpdate/{id}', 'profileUpdate')->name('profile.update');
    Route::post('/users/passwordUpdate/{id}', 'passwordUpdate')->name('passsword.update');
    Route::post('/users/delete/{id}', 'delete')->name('user.delete');
});




Route::controller(ProduitController::class)->middleware('role:Admin')->group(function () {
    Route::get('/produitAdmin', 'index')->name('produitAdmin');
    Route::post('/produitAdmin/create', 'create')->name('produit.create');
    Route::post('/produitAdmin/update/{id}', 'update')->name('produit.update');
    Route::post('/produitAdmin/delete/{id}', 'delete')->name('produit.delete');
});


Route::controller(ProduitController::class)->group(function () {
    Route::get('/ProduitClient', 'indexClient')->name('produitClient');
    Route::get('/show/{id}', 'show')->name('produit.show');
    Route::post('/filterPerCategorie', 'filterPerCategorie')->name('produit.filter');
});





Route::controller(CategorieController::class)->group(function () {
    Route::get('/categorie', 'index')->name('categorie');
    Route::post('/categorie/create', 'create')->name('categorie.create')->middleware('role:Admin');
    Route::post('/categorie/update/{id}', 'update')->name('categorie.update')->middleware('role:Admin');
    Route::post('/categorie/delete/{id}', 'delete')->name('categorie.delete')->middleware('role:Admin');
});



Route::controller(RendezVousController::class)->group(function () {
    Route::get('/rendezVous', 'index')->name('rendezVous')->middleware('role:Admin');
    Route::get('/rendez_vous', 'ClientIndex')->name('ClientIndex');
    Route::post('/rendezVous/create', 'create')->name('rendezVous.create');
    Route::post('/rendezVous/update/{id}', 'update')->name('rendezVous.update');
    Route::post('/rendezVous/delete/{id}', 'delete')->name('rendezVous.delete');
});


Route::get('cart', [ProduitController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProduitController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProduitController::class, 'update'])->name('update.cart');
Route::patch('update-cart-quantiter/{id}', [ProduitController::class, 'updateQuantiter'])->name('update.cart.quantiter');
Route::delete('remove-from-cart/{id}', [ProduitController::class, 'remove'])->name('remove.from.cart');
Route::delete('remove-from-cart-all', [ProduitController::class, 'removeAll'])->name('remove.from.cart.all');

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders',  'index')->middleware('role:Admin');
    Route::get('/orders/create', 'create')->name('order.create');
    Route::get('/AdminOrders',  'Adminindex')->middleware('role:Admin');
    Route::get('/details/{id}',  'orderDetails');
    Route::put('/orders/{id}/updateStatus', 'updateStatus')->name("orders.updateStatus");
});



Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');



Route::get('/404', function () {
    return view('errors.notFound');
})->name('404');

Route::fallback(function () {
    return redirect('/404');
});
