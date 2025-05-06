<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use App\Models\Categorie;
use App\Repositories\Interfaces\ProduitInterface;
use App\Repositories\Interfaces\CategorieInterface;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    private $produitInterface;
    private $categorieInterface;
    public function __construct(ProduitInterface $produitInterface, CategorieInterface $categorieInterface)
    {
        $this->categorieInterface = $categorieInterface;
        $this->produitInterface = $produitInterface;
    }

    public function index()
    {

        $produits = $this->produitInterface->index();
        $produitForCards = $this->produitInterface->allProducts();
        $category = $this->categorieInterface->index();
        // dd($produits);

        return view('Admin.produit', compact('produits', "category", 'produitForCards'));
    }

    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'prix' => 'required|int',
            'description' => 'required|string',
            'promotion' => 'required|int',
            'image' => 'required|string',
            'quantity' => 'required|int',
            'categorie' => 'required|string'
        ]);
        $this->produitInterface->create($request->all());


        return redirect("produitAdmin");
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'prix' => 'required|int',
            'description' => 'required|string',
            'promotion' => 'required|int',
            'image' => 'required|string',
            'quantity' => 'required|int',
            'categorie' => 'required|string'
        ]);
        // dd($validate);

        $this->produitInterface->update($request->all(), $id);

        return redirect()->route('produitAdmin')->with('Produit mis à jour avec succès');
    }

    public function delete($id)
    {
        $this->produitInterface->delete($id);
        return redirect()->route('produitAdmin')->with('Produit supprimé avec succès');
    }



    ///////Client///////



    public function indexClient()
    {
        $category = $this->categorieInterface->index();
        $produits = $this->produitInterface->index();
        return view('Client.produit', compact('produits', "category"));
    }


    public function show($id)
    {

        $produit = $this->produitInterface->show($id);
        $produits = $this->produitInterface->indexClient();
        return view('Client.details', compact('produit', 'produits'));
    }



    public function addToCart($id)

    {
        // dd($id);

        $produit = Produit::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;
        } else {

            $cart[$id] = [

                "id" => $id,

                "name" => $produit->name,

                "quantity" => 1,

                "price" => $produit->prix,

                "image" => $produit->image

            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function updateCart(Request $request)

    {

        if ($request->id && $request->quantity) {

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }


    public function cart()

    {
        return view('Client.cart');
    }


    public function remove($id)

    {
        // dd($id);

        if ($id) {

            $cart = session()->get('cart');

            if (isset($cart[$id])) {

                unset($cart[$id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
            // return redirect('cart')->back();
        }

        return redirect()->back();
    }



    public function removeAll(Request $request)

    {

        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
        return redirect()->back();
    }


    public function updateQuantiter(Request $request, $id)

    {
        // dd($request->quantity);

        if ($id && $request->quantity) {

            $cart = session()->get('cart');

            if ($request->quantity == 0) {
                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }


            $cart[$id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
            return redirect()->back();
        }
    }

    public function filterPerCategorie(Request $request)
    {
        $validate = $request->validate([
            'categorie' => 'required|string'
        ]);

        $produits = $this->produitInterface->filterPerCategorie($request->all());
        return view('Client.produit', compact('produits'));
    }
}
