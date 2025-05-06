<?php
namespace App\Repositories;

use App\Repositories\Interfaces\CategorieInterface;
use App\Models\Categorie;

class CategorieRepository implements CategorieInterface{
    
    public function index(){
        return $categories = Categorie::all();
    }

    public function create(array $request){
        $categorie = new Categorie();
        $categorie->name = $request['name'];
        $categorie->save();
    }

    public function update(array $request, $id){
        
        $categorie = Categorie::find($id);
        if (!$categorie) {
            return redirect()->route('categorie')->with('Categorie non trouvé');
        }
        $categorie->name = $request['name'];
        $categorie->save();
    }

    public function delete($id){
        $categorie = Categorie::find($id);
        if (!$categorie) {
            return redirect()->route('categorie')->with('Categorie non trouvé');
        }
        $categorie->delete();
    }

    
    public function getCategorieByName($name){
        return Categorie::where('name', $name)->first();
    }
}