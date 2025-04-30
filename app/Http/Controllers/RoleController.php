<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\RoleInterface;

class RoleController extends Controller
{
    private $roleInterface;

    public function __construct(RoleInterface $roleInterface)
    {
        $this->roleInterface = $roleInterface;
    }
  
    public function index()
    {
        $roles = $this->roleInterface->index();

        return view('', compact('roles'));
    }

    

    
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = $this->roleInterface->create($request->all());

        // $role
        return redirect()->route('produitAdmin');
    }



  
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->roleInterface->update($request->all(), $id);

        return redirect()->route('produitAdmin');
    }

  
    public function delete($id)
    {
        $this->roleInterface->delete($id);
        return redirect()->route('produitAdmin');
    }


}
