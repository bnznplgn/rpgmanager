<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Affichage de la vue de connexion
     */
    public function showLogin() {
        return view("login");
    }

    /**
     * Connexion
     */
    public function login(Request $request) {
        $crendentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required"
        ]);

        // $user = User::where("email", "=", $crendentials["email"])->first();

        // if(is_null($user) || Hash::check($crendentials["password"], $user->password) == false) {
        //     return redirect("login")->withErrors(["Email or pass is not correct."])->onlyInput('email');
        // }
 
        
        // $request->session()->regenerate();
        // Auth::login($user);
        // return view("profile");
        
        if(Auth::attempt($crendentials)) {
            $request->session()->regenerate();
            return view("profile");
        }
        
        return redirect("login")->withErrors(["Email or pass is not correct."])->onlyInput('email');
    }



    






}
