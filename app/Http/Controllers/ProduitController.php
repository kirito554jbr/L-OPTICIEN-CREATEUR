<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(Request $request){
        $produits = Produit::all();
        return view('Admin.produit', compact('produits'));
    }

    public function create(Request $request){

        $categorie = Categorie::where('name', $request['categorie'])->first();

        $produit = new Produit();
        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->quantity = $request->input('quantity');
        $produit->categorie_id()->associate($categorie);
        $produit->save();
        return redirect()->route('produitAdmin');
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required|integer|min:1',
        ]);
        $produit = Produit::find($id);
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }

        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->quantity = $request->input('quantity');
        $produit->save();

        return redirect()->route('produitAdmin')->with('Produit mis à jour avec succès');

    }

    public function delete(Request $request, $id){
        $produit = Produit::find($id);
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }
        $produit->delete();
        return redirect()->route('produitAdmin')->with('Produit supprimé avec succès');      

    }
}
