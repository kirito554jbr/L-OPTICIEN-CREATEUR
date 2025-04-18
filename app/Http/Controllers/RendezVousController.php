<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    
    public function index()
    {
        $rendezVous = RendezVous::all();
        return view('Admin.rendezVous', compact('rendezVous'));
    }

   
    public function create(Request $request)
    {
        $rendezVous = new RendezVous();
        $rendezVous->date = $request->input('date');
        $rendezVous->user_id()->associate($request->input('user_id'));
        $rendezVous->save();

        return redirect()->route('rendezVous.index');
    }

    public function update(Request $request, RendezVous $rendezVous)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $rendezVous->update($request->all());

        return redirect()->route('rendezVous.index');
    }

    
    public function delete(RendezVous $rendezVous)
    {
        $rendezVous->delete();
        return redirect()->route('rendezVous.index');
    }
}
