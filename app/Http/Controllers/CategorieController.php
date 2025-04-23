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
        $categorie->save();
        return redirect("categorie")->with('success', 'Categorie ajouté avec succès');
    }

    public function update(Request $request, $id){
        
        $categorie = Categorie::find($id);
        if (!$categorie) {
            return redirect()->route('categorie')->with('Categorie non trouvé');
        }
        $categorie->name = $request->input('name');
        $categorie->save();
        
        return redirect()->route('categorie')->with('Categorie mis à jour avec succès');

    }
    public function delete(Request $request, $id){
        $categorie = Categorie::find($id);
        if (!$categorie) {
            return redirect()->route('categorie')->with('Categorie non trouvé');
        }
        $categorie->delete();
        return redirect()->route('categorie')->with('Categorie supprimé avec succès');
    }
    
}
