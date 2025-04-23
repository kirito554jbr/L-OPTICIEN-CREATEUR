<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{

    public function index()
    {

        $rendezVous = RendezVous::all();


        return view('Admin.rendez_vous', compact('rendezVous'));
    }


    public function ClientIndex()
    {

        $rendezVous = RendezVous::all();
        $timesOfTheDay = [];

        foreach ($rendezVous as $rdv) {
       
            $datetime = $rdv->date; // e.g., "2025-04-23 14:30:00"
            // Convert to Carbon instance
            $date = Carbon::parse($datetime);

            // Extract year, month, day
            $year = $date->year;
            $month = $date->month;
            $day = $date->day;

            // Create a new Carbon instance from parts (optional)
            $dayOfWeek = Carbon::create($year, $month, $day)->format('l');

            

            $timesOfTheDay += [$rdv->date => $dayOfWeek];

        }
        // dd($timesOfTheDay);


        return view('Client.rendez_vous', compact('rendezVous', 'timesOfTheDay'));
    }


    public function create(Request $request)
    {

        // dd($request->all());    
        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        // dd($user->id);


        if (!$checkIfExist = RendezVous::where('date', $request->input('date') . ' ' . $request->input('time'))) {
            return redirect()->back()->with('error', 'date not available');
        }

        $rendezVous = new RendezVous();
        $rendezVous->date = $request->input('date') . ' ' . $request->input('time');
        // dd($rendezVous->date);
        $rendezVous->description = $request->input('message');
        $rendezVous->user()->associate($user);
        $rendezVous->save();

        return redirect()->route('main');
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

    public function nonAvailableHours(Request $request)
    {


        // $date = $request->input('date');
        // $rendezVous = RendezVous::whereDate('date', $date)->get();
        // $nonAvailableHours = [];

        // foreach ($rendezVous as $rdv) {
        //     $nonAvailableHours[] = date('H:i', strtotime($rdv->date));
        // }


    }
}
