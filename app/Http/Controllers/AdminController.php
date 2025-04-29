<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ashboard(){
        $users = User::all();
        $categories = Categorie::all();
        // $produits = Produit::all();
        $orders = Order::all();
     
        return view('Admin.dashboard', compact('users', 'categories', 'orders'));
        
    }
}
