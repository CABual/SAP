<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// use App\Models\Role;
class AuthenticationController extends Controller
{
    public function view_login(){
        return view('auth.login');
    }
    public function view_register(){
        return view('auth.register');
    }
    public function register(Request $request){
        $validate = $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'password' =>'required',
        ]);

        User::create($request->all());

        return redirect('/login');
    }
    public function login(Request $request){
        $request->validate([
            'email',
            'password',
        ]);
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->put('user', $request->email);
            return redirect()->intended('/');
        }
        else{
            return redirect()->back()->with('error', 'Invalid email or password');            
        }
    }
}
