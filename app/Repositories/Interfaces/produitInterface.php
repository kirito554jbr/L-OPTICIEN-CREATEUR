<?php

namespace App\Repositories\Interfaces;

use App\Models\Produit;

Interface ProduitInterface
{
    public function index(Produit  $request);
    public function create(Produit  $request);
    public function update(Produit $request, $id);
    public function delete(Produit $request, $id);
    public function indexClient(Produit $request);
    public function show($id);
    public function addToCart($id);
    public function updateCart(Produit $request);
    public function cart();
    public function remove($id);
    public function removeAll(Produit $request);
    public function updateQuantiter(Produit $request,$id);
    public function filterPerCategorie(Produit $request);
}