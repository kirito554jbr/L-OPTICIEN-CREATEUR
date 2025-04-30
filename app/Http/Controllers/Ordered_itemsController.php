<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordered_items;
use App\Repositories\Interfaces\OrderedItemsInterface;

class Ordered_itemsController extends Controller
{
    private $orderedItemsInterface;
    
    public function __construct(OrderedItemsInterface $orderedItemsInterface)
    {
        $this->orderedItemsInterface = $orderedItemsInterface;
    }


    public function index()
    {
        $ordered_items = $this->orderedItemsInterface->index();
        return view('Admin.ordered_items', compact('ordered_items'));
    }

   
    public function create(Request $request)
    {
        $ordered_items = new Ordered_items();
        $ordered_items->quantity = $request->input('quantity');
        $ordered_items->produit_id()->associate($request->input('produit_id'));
        $ordered_items->user_id()->associate($request->input('user_id'));
        $ordered_items->save();

        return redirect()->route('ordered_items.index');
    }   
    

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'produit_id' => 'required|exists:produits,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // $ordered_items->update($request->all());

        return redirect()->route('ordered_items.index');
    }

   
    public function delet($id)
    {
        // $ordered_items->delete();
        return redirect()->route('ordered_items.index');
    }
}
