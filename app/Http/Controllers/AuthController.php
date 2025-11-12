<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        $roles = Role::all();
        $isAdmin = Auth::check() && Auth::user()->role && Auth::user()->role->name === 'Admin';

        return view('auth.register', compact('roles', 'isAdmin'));
    }

    public function register(Request $request)
    {
        // Check if user is admin
        $isAdmin = Auth::check() && Auth::user()->role && Auth::user()->role->name === 'Admin';

        $validationRules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];

        // Only validate role_id if admin is creating the user
        if ($isAdmin) {
            $validationRules['role_id'] = 'required|exists:roles,id';
        }

        $data = $request->validate($validationRules);

        // Get customer role ID if not admin
        $roleId = $isAdmin ? $data['role_id'] : Role::where('name', 'Customer')->first()->id;

        //eloquent way to create a user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => $roleId,
        ]);

        // Only auto-login if it's a guest registration
        if (!$isAdmin) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('success', 'User created successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
