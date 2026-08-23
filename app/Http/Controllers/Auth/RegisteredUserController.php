<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    /**
     * Show register form.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle registration.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::default()],
        ]);

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        // Login user automatically
        Auth::login($user);

        // Go to ideas page
        return redirect('/ideas');
    }
}
