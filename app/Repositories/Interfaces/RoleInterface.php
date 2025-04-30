<?php

namespace App\Repositories\Interfaces;
use App\Models\Role;

Interface RoleInterface
{
    public function index();
    public function create(array $request);
    public function update(array $request, $id);
    public function delete($id);
    public function getRoleByName($name);
}