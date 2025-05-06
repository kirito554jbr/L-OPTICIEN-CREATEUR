<?php

namespace App\Http\Controllers;

use App\Models\Traitemnet;
use Illuminate\Http\Request;

class TraitemnetController extends Controller
{
    
    public function index()
    {
        $traitemnet = Traitemnet::all();
        return view('', compact('traitemnet'));
    }

    
    public function create(Request $request)
    {
        $traitemnet = new Traitemnet();
        $traitemnet->name = $request->input('name');
        $traitemnet->description = $request->input('description');
        $traitemnet->save();
        return redirect()->route('produitAdmin');
    }

    public function update(Request $request)
    {
        $traitemnet = Traitemnet::find($request->input('id'));
        $traitemnet->name = $request->input('name');
        $traitemnet->description = $request->input('description');
        $traitemnet->save();
        return redirect()->route('produitAdmin');
    }

    
    public function delete(Request $request)
    {
        $traitemnet = Traitemnet::find($request->input('id'));
        $traitemnet->delete();
        return redirect()->route('produitAdmin');
    }
}
