<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $produits = Produit::take(5)->get();
        // $categories = Categorie::all();
        $users = User::all();
        $orders = Order::take(5)->get();
        $totalOrders = count($orders);
        $totalUsers = User::where('role_id', 2)->count();
        // $totalCategories = count($categories);

        return view('Admin.dashboard' , compact('produits', 'users', 'orders', 'totalOrders', 'totalUsers'));
    }
}
