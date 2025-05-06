<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\ordersInterface;
use App\Repositories\Interfaces\ProduitInterface;
use App\Repositories\Interfaces\OrderedItemsInterface;


class OrdersRepository implements ordersInterface 
{
    private $produitInterface;
    private $orderedItemsInterface;

    public function __construct(ProduitInterface $produitInterface, OrderedItemsInterface $orderedItemsInterface)
    {
        $this->produitInterface = $produitInterface;
        $this->orderedItemsInterface = $orderedItemsInterface;
    }



    public function index()
    {
        $orders = Order::paginate(10);

        return $orders;
    }


    public function create(array $request, $produit, $user)
    {
        // dd($produit);
        $orders = new Order();
        $orders->status = "Pending";
        $orders->adresse = $user->adress;
        $orders->popo()->associate($user);
        $orders->save();

        $this->orderedItemsInterface->createOrderedItem($request, $produit, $orders);

        return redirect()->route('produitClient'); 
    }






    // public function update(array $request,$id)
    // {

    //     $order->update($request->all());

    //     return redirect()->route('orders.index');
    // }


    // public function delete($id)
    // {
    //     $order->delete();
    //     return redirect()->route('orders.index');
    // }



    public function orderDetails(array $request)
    {
        
        // dd($request['id']);
        $orders = $this->findById($request['id']);

        $ordered_items = $this->orderedItemsInterface->findBydOrderId($request['id']);
        // dd($ordered_items);

        $product = [];
        foreach ($ordered_items as $key => $value) {

            array_push($product, $this->produitInterface->show($value['product_id']));
            
        }

        return $product;
    }


    public function updateStatus(array $request, $id)
    {
        
        $order = $this->findById($id);

        // dd($order);
        $order->status = $request['status'];
        $order->save();
    }


    public function findById($id)
    {
        $order = Order::find($id);
        return $order;
    }

    public function UserOrders($id)
    {
        $orders = Order::where('client', $id)->get();
        return $orders;
    }
}
