<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $user->adress = $request->input("adress");
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
        $user->adress = $request->input('adress');
        $user->password = bcrypt($request->input('password'));
        $user->role()->associate($role);
        $user->save();
        return redirect()->route('users')->with('Utilisateur mis à jour avec succès');
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

    public function profileUpdate(Request $request){
        $user = auth()->user();
        // dd($user->id);

        $AuthUser = User::find($user->id);
        // $user->image = $request->input('image');
        // $user->save();

        if ($AuthUser) {
            $AuthUser->firstName = $request->input('firstName');
            $AuthUser->lastName = $request->input('lastName');
            $AuthUser->email = $request->input('email');
            $AuthUser->phone = $request->input('phone');
            $AuthUser->adress = $request->input('adress');
            $AuthUser->save();
            
            return redirect()->back()->with('success', 'profil mise à jour avec succès');
        }
    }

    public function passwordUpdate(Request $request){
        $AuthUser = auth()->user();
        // dd($user->id);

        $user = User::find($AuthUser->id);
        // $user->image = $request->input('image');
        // $user->save();
        // dd($user->password);
        
        if(!Hash::check($request->input('oldPassword'), $user->password)){
            // dd(Hash::check($request->input('oldPassword'), $user->password));
            return redirect()->back()->with('error', 'mot de passe incorrect');

        }
        if ($request->input('newPassword') == $request->input('passwordConfirmation')) {
            
            // dd("wrong");
            $user->password = bcrypt($request->input('newPassword'));
            $user->save();
            
            return redirect()->back()->with('success', 'mot de passe mise à jour avec succès');
        }

        return redirect()->back()->with('error', 'les deux mot de passe ne correspondent pas');
    }

}
