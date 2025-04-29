<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Ordered_items;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::paginate(10);

        // $userName = User::find(auth()->id());

        // dd($userName);

        return view('Admin.command', compact('orders'));
    }


    // public function Adminindex()
    // {
    //     $orders = Order::all();
    //     // dd($orders);
    //     // array_push($product, Product::find($value['product_id']));

    //     $userName = User::find(auth()->id());
    //     // $users = [];
    //     foreach ($orders as $order) {
    //         $user = User::find($order['user_id']);
    //     };
    //     return view('Admin.Adminorders', compact('orders'), compact('userName'));
    // }


    public function create(Request $request)
    {

        $test = session()->get('cart');

        $orders = new Order();

        $user = Auth::user();
        $orders->status = "Pending";
        $orders->adresse = $user->adress;
        // dd($user->getRelations());
        // $user->order()->associate($orders);
        $orders->popo()->associate($user);
        $orders->save();

        foreach ($test as $key => $details) {
            $produit = Produit::find($details['id']);
            $ordered_items = new Ordered_items();
            $ordered_items->order()->associate($orders);
            $ordered_items->produit()->associate($produit);
            $ordered_items->quantiter = $details['quantity'];
            $ordered_items->prix = $produit->prix;
            $ordered_items->save();
            // $produit->quantiter -= $details['quantity'];
            $produit->quantiter -= $details['quantity'];
            $produit->save();
        }



        return redirect()->route('produitClient'); 
    }






    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'produit_id' => 'required|integer',
            'quantity' => 'required|integer',
            'total_price' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index');
    }


    public function delete(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }



    public function orderDetails(Request $request)
    {
        // dd($request['id']);
        $orders = Order::find($request['id']);

        $ordered_items = Ordered_items::where('order_id', $request['id'])->get();
        // dd($ordered_items);

        $product = [];
        // $quantity = [];
        foreach ($ordered_items as $key => $value) {

            array_push($product, Produit::find($value['product_id']));
        }




        return view('Client.orderDetails', compact('orders'), compact('product'));
    }


    public function updateStatus(Request $request,$id)
    {

        $order = Order::find($id);

        // dd($order);
        $order->status = $request->input('status');
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

}
