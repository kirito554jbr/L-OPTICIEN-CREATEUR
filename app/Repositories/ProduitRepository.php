<?php

namespace App\Repositories;

use App\Models\Produit;
use App\Repositories\Interfaces\CategorieInterface;
use  App\Repositories\Interfaces\ProduitInterface;

class ProduitRepository implements ProduitInterface
{
    protected $produitModel;
    private $categorieInterface;


    public function __construct(Produit $produitModel, CategorieInterface $categorieInterface)
    {
        $this->produitModel = $produitModel;
        $this->categorieInterface = $categorieInterface;
    }


    public function index()
    {
        return $produits = Produit::paginate(10);
    }
    public function allProducts()
    {
        return Produit::all();
    }

    public function create(array $request)
    {
        $categorie = $this->categorieInterface->getCategorieByName($request['categorie']);
        // dd($request['quantity']);

        $produit = new Produit();
        $produit->name = $request['name'];
        $produit->prix = $request['prix'];
        $produit->description = $request['description'];
        $produit->image = $request['image'];
        $produit->promotion = $request['promotion'];
        $produit->quantiter = $request['quantity'];
        $produit->categorie()->associate($categorie);
        $produit->save();
        
    }

    public function update(array $request, $id)
    {

        $produit = Produit::find($id);
        
        $categorie = $this->categorieInterface->getCategorieByName($request['categorie']);
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }

        $produit->name = $request['name'];
        $produit->prix = $request['prix'];
        $produit->promotion = $request['promotion'];
        $produit->description = $request['description'];
        $produit->image = $request['image'];
        $produit->quantiter = $request['quantity'];
        $produit->categorie()->associate($categorie);
        $produit->save();

       
    }

    public function delete( $id)
    {
        $produit = Produit::find($id);
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }
        $produit->delete();
    }



    ///////Client///////



    public function indexClient()
    {
        // $produits = Produit::all();
        return Produit::paginate(12);
    }


    public function show($id)
    {

        
       return  Produit::find($id);

    }


    public function filterPerCategorie(array $request)
    {
        $categorie = $this->categorieInterface->getCategorieByName($request['categorie']);
        
        return Produit::where('categorie_id', $categorie->id)->paginate(10);
         
    }
}
