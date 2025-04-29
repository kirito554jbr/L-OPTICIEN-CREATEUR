<?php
namespace App\Repositories;
use App\Models\Produit;
use  App\Repositories\Interfaces\ProduitInterface;

class ProduitRepo implements ProduitInterface
{
    protected $produitModel;

    public function __construct(Produit $produitModel)
    {
        $this->produitModel = $produitModel;
    }

    public function index(Produit $request){
        // $produits = Produit::all();
    
        $produits = Produit::paginate(10);
        $produitForCards = Produit::all();
        // $category = Categorie::all();
        $category = $this->categorieRepositorie->AllCategories();
        // dd($category);

        // dd($produits);
        return view('Admin.produit', compact('produits', "category", 'produitForCards'));
    }

    public function create(Produit $request){

        // dd($request['categorie']);
        // $categorie = Categorie::where('name', $request['categorie'])->first();
        $categorie = $this->categorieRepositorie->getCategorieByName($request['categorie']);
        // dd($request['quantity']);

        $produit = new Produit();
        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->quantiter = $request->input('quantity');
        $produit->categorie()->associate($categorie);
        $produit->save();
        return redirect("produitAdmin");
    }

    public function update(Produit $request, $id){
        
        $produit = Produit::find($id);
        // $categorie = Categorie::where('name', $request['categorie'])->first();
        $categorie = $this->categorieRepositorie->getCategorieByName($request['categorie']);
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }

        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->promotion = $request->input('promotion');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->quantiter = $request->input('quantity');
        $produit->categorie()->associate($categorie);
        $produit->save();

        return redirect()->route('produitAdmin')->with('Produit mis à jour avec succès');

    }

    public function delete(Produit $request, $id){
        $produit = Produit::find($id);
        if (!$produit) {
            return redirect()->route('produitAdmin')->with('Produit non trouvé');
        }
        $produit->delete();
        return redirect()->route('produitAdmin')->with('Produit supprimé avec succès');

    }



    ///////Client///////



    public function indexClient(Produit $request){
        // $produits = Produit::all();
        $produits = Produit::paginate(12);
    
        // $category = Categorie::all();
        $category = $this->categorieRepositorie->AllCategories();

        // dd($category);

        // dd($produits);
        return view('Client.produit', compact('produits', "category"));
    }


    public function show($id){

        $produit = Produit::find($id);
        

        // $produits = Produit::all();
        $produits = Produit::paginate(8);
        if (!$produit) {
            return redirect()->route('produitClient')->with('Produit non trouvé');
        }
        return view('Client.details', compact('produit', 'produits'));
    }


    
    public function addToCart($id)

    {
        // dd($id);

        $produit = Produit::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {

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


    public function updateCart(Produit $request)

    {

        if($request->id && $request->quantity){

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');

        }

    }


    public function cart()

    {
    //     // dd(auth()->id());

    //     // $test = session()->get('cart');
    //     // dd($test);
    //     // dd(array_values($test)[0]);


        return view('Client.cart');

    }


    public function remove($id)

    {
        // dd($id);

        if($id) {

            $cart = session()->get('cart');

            if(isset($cart[$id])) {

                unset($cart[$id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');
            // return redirect('cart')->back();
        }

        return redirect()->back();

    }



    public function removeAll(Produit $request)

    {

        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');

        }
        return redirect()->back();
    }


    public function updateQuantiter(Produit $request,$id)

    {
        // dd($request->quantity);

        if($id && $request->quantity){
            
            $cart = session()->get('cart');

            if($request->quantity == 0){
                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }


            $cart[$id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
            return redirect()->back();
        }

    }
   
    public function filterPerCategorie(Produit $request){
        // dd($request->all());
        // $categorie = Categorie::where('name', $request['categorie'])->first();
        $category = $this->categorieRepositorie->AllCategories();
        // dd($categorie);
        $produits = Produit::where('categorie_id', $categorie->id)->paginate(10);
        return view('Client.produit', compact('produits'));   
    }
}