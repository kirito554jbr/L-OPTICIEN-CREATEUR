<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(Request $request){
        $categories = Categorie::all();
        return view('Admin.categorie', compact('categories'));
    }

    public function create(Request $request){
        $categorie = new Categorie();
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->save();
        return redirect()->route('produitAdmin')->with('success', 'Categorie ajouté avec succès');
    }
    
}
