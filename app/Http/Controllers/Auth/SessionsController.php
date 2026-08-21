<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SessionsController extends Controller
{
    /**
     * Show login form.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle login.
     */
    public function store(Request $request)
    {
        // Validate
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', Password::default()],
        ]);

        // Attempt login
        if (Auth::attempt($validated)) {

            // Regenerate session
            $request->session()->regenerate();

            // Go to ideas page
            return redirect('/ideas');
        }

        // Login failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle logout.
     */
    public function destroy(Request $request)
    {
        // Logout user
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Go back to Register page
        return redirect('/register');
    }
}