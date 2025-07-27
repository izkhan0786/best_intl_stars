<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login form
    public function loginForm()
    {
        return view('sign-in');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            toastr()->success('Logged in successfully');
            return redirect('/dashboard');
        }

        toastr()->error('Invalid email or password');
        return back();
    }

    // Show registration form
    public function registerForm()
    {
        return view('sign-up');
    }

    // Handle user registration
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        toastr()->success('Account created successfully');
        return redirect('/dashboard');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        toastr()->warning('Logged out successfully');
        return redirect('/login');
    }
}
