<?php

namespace App\Repositories\Interfaces;
use App\Models\User;

Interface UserInterface
{
    public function index();
    public function create(array $request);
    public function update(array $request, $id);
    public function delete($id);
    public function findByEmail($email);
}