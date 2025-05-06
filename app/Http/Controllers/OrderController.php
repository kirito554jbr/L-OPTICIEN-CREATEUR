<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Ordered_items;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\ordersInterface;

class OrderController extends Controller
{
    private $ordersInterface;

    public function __construct(ordersInterface $ordersInterface)
    {
        $this->ordersInterface = $ordersInterface;
    }

    public function index()
    {
        $orders = $this->ordersInterface->index();

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

        
        // $this->validate($request, [
        //     'user_id' => 'required|integer',
        //     'produit_id' => 'required|integer',
        //     'quantity' => 'required|integer',
        //     'total_price' => 'required|numeric',
        //     'status' => 'required|string|max:255',
        // ]);

        $produit = session()->get('cart');
        $user = Auth::user();


        $this->ordersInterface->create($request->all(), $produit, $user);
        
        return redirect()->route('produitClient'); 
    }






    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'user_id' => 'required|integer',
    //         'produit_id' => 'required|integer',
    //         'quantity' => 'required|integer',
    //         'total_price' => 'required|numeric',
    //         'status' => 'required|string|max:255',
    //     ]);

    //     $this->ordersInterface->update($request->all(), $id);

    //     return redirect()->route('orders.index');
    // }


    // public function delete(Order $order)
    // {
    //     $order->delete();
    //     return redirect()->route('orders.index');
    // }



    public function orderDetails(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:orders,id',
        ]);
        

        // dd($request['id']);
        $orders = $this->ordersInterface->findById($request['id']);
        $product = $this->ordersInterface->orderDetails($request->all());



        return view('Client.orderDetails', compact('orders'), compact('product'));
    }


    public function updateStatus(Request $request,$id)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        ;

        // dd($order);
        $this->ordersInterface->updateStatus($request->all(), $id);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

    public function UserOrders($id){
        $orders = $this->ordersInterface->UserOrders($id);
        // dd($orders);
        return view('Client.myCommende', compact('orders'));
    }

}
