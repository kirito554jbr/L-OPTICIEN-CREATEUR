<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\RoleInterface;
use App\Repositories\Interfaces\UserInterface;

class UserController extends Controller
{
    private $userInterface;
    private $roleInterface;

    public function __construct(UserInterface $userInterface, RoleInterface $roleInterface)
    {
        $this->userInterface = $userInterface;
        $this->roleInterface = $roleInterface;
    }
    
    public function index(){
        $users = $this->userInterface->index();

        $roles = $this->roleInterface->index();
        return view('Admin.users', compact('users', 'roles'));
    }

    public function create(Request $request){

        $validate = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'image' => 'required|string',
            'adress' => 'required|string',
            'password' => 'required|string|min:8',
            'role' => 'required|string'
        ]);
        // dd($validate);
        $this->userInterface->create($request->all());

        return redirect("users")->with('success', 'Utilisateur ajouté avec succès');
    }

    public function update(Request $request, $id){
        
        $validate = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'image' => 'required|string',
            'adress' => 'required|string',
            'role' => 'required|string'
        ]);

        $this->userInterface->update($request->all(), $id);
        return redirect()->route('users')->with('Utilisateur mis à jour avec succès');
    }

    public function delete(Request $request, $id){
        $this->userInterface->delete($id);
        return redirect()->route('users')->with('Utilisateur supprimé avec succès');
    }

    public function profile(){
        $AuthUser = auth()->user();
        $user = User::find($AuthUser->id);

        // $roles = Role::all();
        return view('Client.profile', compact('user'));
    }

    public function updateProfileImage(Request $request){
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
            $AuthUser->adresse = $request->input('adress');
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
