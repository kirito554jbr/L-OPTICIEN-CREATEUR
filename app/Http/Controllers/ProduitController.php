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
    
        $category = Categorie::all();

        // dd($category);

        // dd($produits);
        return view('Admin.produit', compact('produits', "category"));
    }

    public function create(Request $request){

        // dd($request['categorie']);
        $categorie = Categorie::where('name', $request['categorie'])->first();
        // dd($request['quantity']);

        $produit = new Produit();
        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->quantiter = $request->input('quantity');
        $produit->categorie()->associate($categorie);
        $produit->save();
        return redirect("produitAdmin");
    }

    public function update(Request $request, $id){
        
        $produit = Produit::find($id);
        $categorie = Categorie::where('name', $request['categorie'])->first();
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }

        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->quantiter = $request->input('quantity');
        $produit->categorie()->associate($categorie);
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



    ///////Client///////



    public function indexClient(Request $request){
        $produits = Produit::all();
    
        $category = Categorie::all();

        // dd($category);

        // dd($produits);
        return view('Client.produit', compact('produits', "category"));
    }
}
