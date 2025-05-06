<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\RoleInterface;
use App\Repositories\Interfaces\UserInterface;

class UserRepository implements UserInterface
{
    private $roleInterface;

    public function __construct(RoleInterface $roleInterface)
    {
        $this->roleInterface = $roleInterface;
    }

    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function create(array $request)
    {


        $role = $this->roleInterface->getRoleByName($request['role']);


        $user = new User();
        $user->firstName = $request['firstName'];
        $user->lastName = $request['lastName'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->image = $request['image'];
        $user->adresse = $request["adress"];
        $user->password = bcrypt($request['password']);
        $user->role()->associate($role);
        $user->save();
        return redirect("users")->with('success', 'Utilisateur ajouté avec succès');
    }

    public function update(array $request, $id)
    {
        $user = User::find($id);
        $role = $this->roleInterface->getRoleByName($request['role']);


        if (!$user) {
            return redirect()->route('users')->with('Utilisateur non trouvé');
        }
        $user->firstName = $request['firstName'];
        $user->lastName = $request['lastName'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->image = $request['image'];
        $user->adresse = $request['adress'];
        $user->role()->associate($role);
        $user->save();
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users')->with('Utilisateur non trouvé');
        }
        $user->delete();
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
