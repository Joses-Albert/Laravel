<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function auth(Request $request): RedirectResponse
    {
        // Validate the login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials, $request->checkRemember)) {
            // Regenerate the session ID to prevent session fixation
            $request->session()->regenerate();

            // Redirect the user to the dashboard
            return redirect()->intended('beranda');
        }

        // If the authentication fails, return back with an error message
        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session and regenerate the session token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect the user to the login page
        return redirect()->route('login');
    }
}
