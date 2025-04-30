<?php

namespace App\Repositories\Interfaces;

use App\Models\Produit;

Interface ProduitInterface
{
    public function index();
    public function create(array  $request);
    public function update(array $request, $id);
    public function delete($id);
    public function indexClient();
    public function show($id);
   
    public function filterPerCategorie(array $request);
    public function allProducts(); 
}