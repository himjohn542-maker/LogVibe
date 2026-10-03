<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    
    public function showRegisterPage(){
        return view('auth.register');
    }

    public function registerUser(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        Auth::login($user);
        return redirect()->route('homePage');
    }

    public function showLoginPage(){
        return view('auth.login');
    }

    public function loginUser(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->view('home')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }
    }

    public function logoutUser(Request $request){
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('showLoginPage');
    }
}
