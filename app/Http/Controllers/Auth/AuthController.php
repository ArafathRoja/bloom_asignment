<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function register()
    {

      return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login')->with('success', 'User Created Successfully!');
    }

    public function login()
    {

      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Opps! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

    public function home()
    {
        
        if (empty(Auth::user()->isUser()) === false) {
            return view('auth.home');
        }
        else if (Auth::user()->isAdmin()) {
            return redirect('admin');
        } 
        else {
            return view('auth.home');
        }
    }
}
