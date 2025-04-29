<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function register(Request $request){
        // $request->validate([
        //     'firstName' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        // return "Asdascasc";
        // die;

        if($request->password == $request->passwordConfirmation){

       

        $user = new User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->image = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png";
        $role_name = 'Client' ;
        $role = Role::where('name',$role_name )->first();
        $user->role()->associate($role);
        // return $role ;
        $user->save();
        // return $user ; 
        }
        else{
            echo "false";
        }
        Auth::login($user);
        // return "acascascacac";  

        return redirect('/');
    }
    


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $checkRole = User::where('email', $request->input('email'))->first();



        if($checkRole->role_id == 1){
            Auth::login($checkRole);
            // dd(auth()->user());
            return redirect('/dashboardAdmin')->with('success', 'Login successful!');

        }
        // Attempt to log the user in
        elseif (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->with('success', 'Login successful!');
        }
        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful!');
    }

    
}