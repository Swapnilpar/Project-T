<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerPost(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Registeration was successfull');
    }

    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success','Login Successfull');
        }

        return back()->with('error', 'Login credentials are invalid');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
