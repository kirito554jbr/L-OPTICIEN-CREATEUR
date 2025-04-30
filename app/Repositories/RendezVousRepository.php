<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\RendezVous;
use App\Repositories\Interfaces\RendezVousInterface;
use App\Repositories\Interfaces\UserInterface;

class RendezVousRepository implements RendezVousInterface
{
    private $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }





    public function index()
    {
        return $rendezVous = RendezVous::all();
    }

    public function ClientIndex()
    {
        $rendezVous = $this->index();
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
        return $timesOfTheDay;
    }


    public function create(array $request)
    {
        $user = $this->userInterface->findByEmail($request['email']);

        $rendezVous = new RendezVous();
        $rendezVous->date = $request['date'] . ' ' . $request['time'];
        // dd($rendezVous->date);
        $rendezVous->description = $request['message'];
        $rendezVous->user()->associate($user);
        $rendezVous->save();
    }


    public function update(array $request, $id)
    {
        $rendezVous = RendezVous::find($id);

        $rendezVous->date = $request['date'];
        $rendezVous->save();
    }

    public function delete($id) {
        $rendezVous = RendezVous::find($id);
        $rendezVous->delete();
    }

    public function checkIfExist($date, $time)
    {
        return $checkIfExist = RendezVous::where('date', $date . ' ' . $time)->exists();
    }

    public function carbon($date)
    {
        $datetime = $date;
        $date = Carbon::parse($datetime);

        $year = $date->year;
        $month = $date->month;
        $day = $date->day;
        $dayOfWeek = Carbon::create($year, $month, $day)->format('l');
        return $dayOfWeek;
    }
}
