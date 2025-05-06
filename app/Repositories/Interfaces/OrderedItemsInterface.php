<?php


namespace App\Repositories\Interfaces;

use App\Models\Ordered_items;

Interface OrderedItemsInterface
{
    public function index();
    public function create(array $request);
    public function update(array $request,$id);
    public function delete($id);
    public function createOrderedItem(array $request, $produit, $orders);
    public function findBydOrderId($id);
    // public function createOrderedItem(array $data): Ordered_items;
    // public function updateOrderedItem(Ordered_items $orderedItem, array $data): bool;
    // public function deleteOrderedItem(Ordered_items $orderedItem): bool;
}