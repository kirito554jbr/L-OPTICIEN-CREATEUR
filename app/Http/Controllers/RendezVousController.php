<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\Interfaces\RendezVousInterface;

class RendezVousController extends Controller
{

    private $userInterface;
    private $rendezVousInterface;

    public function __construct(UserInterface $userInterface, RendezVousInterface $rendezVousInterface)
    {
        $this->userInterface = $userInterface;
        $this->rendezVousInterface = $rendezVousInterface;
    }


    public function index()
    {

        $rendezVous = $this->rendezVousInterface->index();


        return view('Admin.rendez_vous', compact('rendezVous'));
    }


    public function ClientIndex()
    {

        $timesOfTheDay = $this->rendezVousInterface->ClientIndex();
        $rendezVous = $this->rendezVousInterface->index();
        // dd($timesOfTheDay);


        return view('Client.rendez_vous', compact('rendezVous', 'timesOfTheDay'));
    }


    public function create(Request $request)
    {
        // dd($request->all());
       $validate = $request->validate ([
            'date' => 'required|date',
            'time' => 'required',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        // dd($validate);
        // dd($validate);

        $user = $this->userInterface->findByEmail($request['email']);

        if (!$user) {
            return redirect()->back()->with('notFound', 'Email not found');
        }

        $dayOfWeek = $this->rendezVousInterface->carbon($request['date']);

        if ($dayOfWeek == "Sunday" || $dayOfWeek == "Saturday") {
            return redirect()->back()->with('error', 'this day is not available');
        }


        $checkIfExist = $this->rendezVousInterface->checkIfExist($request['date'], $request['time']);

        if ($checkIfExist) {
            return redirect()->back()->with('exist', 'date not available');
        } else {

        $rendezVous = $this->rendezVousInterface->create($request->all());

            
        
        return redirect()->route('main');
        }
    }

    public function update(Request $request, $id)
    {
        
        $validate = ([
            'date' => 'required|date',
        ]);
        $this->rendezVousInterface->update($request->all(), $id);

        return redirect()->route('rendezVous');
    }


    public function delete($id)
    {
        $this->rendezVousInterface->delete($id);
        return redirect()->route('rendezVous');
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
