<?php
namespace App\Repositories\Interfaces;
use App\Models\RendezVous;

Interface RendezVousInterface
{
    public function index();
    public function ClientIndex();
    public function create(array $request);
    public function update(array $request, $id);
    public function delete($id);
    public function checkIfExist($date, $time);
    public function carbon($date);
}