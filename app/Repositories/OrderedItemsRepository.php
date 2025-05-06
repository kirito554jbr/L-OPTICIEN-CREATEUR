<?php


namespace App\Repositories;

use App\Models\Ordered_items;
use App\Repositories\Interfaces\ordersInterface;
use App\Repositories\Interfaces\ProduitInterface;
use App\Repositories\Interfaces\OrderedItemsInterface;

class OrderedItemsRepository implements OrderedItemsInterface
{
    private $produitInterface;  

    public function __construct(ProduitInterface $produitInterface)
    {
        $this->produitInterface = $produitInterface;
        
    }


    public function index(){

    }
    public function create(array $request){}
    public function update(array $request,$id){}
    public function delete($id){}
    public function createOrderedItem(array $request, $produit, $orders)
    {
        foreach ($produit as $key => $details) {
            // $produit = Produit::find($details['id']);
            $produit = $this->produitInterface->show($details['id']);
            $ordered_items = new Ordered_items();
            $ordered_items->order()->associate($orders);
            $ordered_items->produit()->associate($produit);
            $ordered_items->quantiter = $details['quantity'];
            $ordered_items->prix = $produit->prix;
            $ordered_items->save();
            $produit->quantiter -= $details['quantity'];
            $produit->save();
        }
    }

    public function findBydOrderId($id)
    {
        $ordered_items = Ordered_items::where('order_id', $id)->get();
        return $ordered_items;
    }
}