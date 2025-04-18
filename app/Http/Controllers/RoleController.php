<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
  
    public function index()
    {
        $roles = Role::all();
        return view('', compact('roles'));
    }

    

    
    public function create(Request $request)
    {
        Role::create([
            'name' => $request['name']
        ]);
        return redirect()->route('produitAdmin');
    }



  
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role->update($request->all());

        return redirect()->route('produitAdmin');
    }

  
    public function delete(Role $role)
    {
        $role->delete();
        return redirect()->route('produitAdmin');
    }
}
