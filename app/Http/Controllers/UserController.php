<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(Request $request){
        $users = User::all();

        $roles = Role::all();
        return view('Admin.users', compact('users', 'roles'));
    }

    public function create(Request $request){

        $role = Role::where('name', $request['role'])->first();


        $user = new User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->image = $request->input('image');
        $user->password = bcrypt($request->input('password'));
        $user->role()->associate($role);
        $user->save();
        return redirect("users")->with('success', 'Utilisateur ajouté avec succès');
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $role = Role::where('name', $request['role'])->first();

        if(!$user){
            return redirect()->route('users')->with('Utilisateur non trouvé');
        }
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->image = $request->input('image');
        $user->password = bcrypt($request->input('password'));
        $user->role()->associate($role);
        $user->save();
        return redirect()->route('/')->with('Utilisateur mis à jour avec succès');
    }

    public function delete(Request $request, $id){
        $user = User::find($id);
        if(!$user){
            return redirect()->route('users')->with('Utilisateur non trouvé');
        }
        $user->delete();
        return redirect()->route('users')->with('Utilisateur supprimé avec succès');
    }

    public function profile(Request $request){
        $AuthUser = auth()->user();
        $user = User::find($AuthUser->id);

        // $roles = Role::all();
        return view('Client.profile', compact('user'));
    }

    public function updateProifileImage(Request $request){
        $user = auth()->user();
        // dd($user->id);

        $AuthUser = User::find($user->id);
        // $user->image = $request->input('image');
        // $user->save();

        if ($AuthUser) {
            // dd($request->input('image'));
            $AuthUser->image = $request->input('image');
            $AuthUser->save();
        } else {
            return redirect()->back()->with('error', 'Utilisateur non authentifié');
        }
        

        return redirect()->back()->with('success', 'Image de profil mise à jour avec succès');
    }

}
