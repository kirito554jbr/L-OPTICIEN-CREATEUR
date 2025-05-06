<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategorieInterface;

class CategorieController extends Controller
{
    private $categorieInterface;
    public function __construct(CategorieInterface $categorieInterface)
    {
        $this->categorieInterface = $categorieInterface;
    }

    public function index(){
        $categories = $this->categorieInterface->index();
        return view('Admin.categorie', compact('categories'));
    }

    public function create(Request $request){
        $validate = $request->validate([
            'name' => 'required|string',
        ]);
        $this->categorieInterface->create($request->all());
        return redirect("categorie")->with('success', 'Categorie ajouté avec succès');
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required|string',
        ]);
        
        $categorie = $this->categorieInterface->update($request->all(), $id);
        
        return redirect()->route('categorie')->with('Categorie mis à jour avec succès');

    }
    public function delete(Request $request, $id){
        $categorie = $this->categorieInterface->delete($id);
        return redirect()->route('categorie')->with('Categorie supprimé avec succès');
    }
    
}
