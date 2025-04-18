<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('Admin.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->input('user_id');
        $order->produit_id = $request->input('produit_id');
        $order->quantity = $request->input('quantity');
        $order->total_price = $request->input('total_price');
        $order->status = 'pending';
        $order->save();

        return redirect()->route('orders.index');
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
}
