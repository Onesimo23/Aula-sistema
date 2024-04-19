<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the form for login.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/user');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput($request->only('email'));
        }
    }

    /**
     * Logout the authenticated user.
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
