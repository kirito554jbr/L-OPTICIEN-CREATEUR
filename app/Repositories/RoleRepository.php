<?php 
namespace App\Repositories;
use App\Repositories\Interfaces\RoleInterface; 
use App\Models\Role;

class RoleRepository implements RoleInterface
{
    public function index()
    {
        return Role::all();
    }

    public function create(array $request)
    {
        $role = Role::create([
            'name' => $request['name']
        ]);
    }

    public function update(array $request, $id)
    {
        $role = Role::find($id);
        $role->update($request);
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
    } 

    public function getRoleByName($name)
    {
        return Role::where('name', $name)->first();
    }
}