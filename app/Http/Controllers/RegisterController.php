<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
   
    public function show()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the registration input
        $validator = $request->validate([
            'namaInput' => 'required',
            'emailInput' => 'required|email',
            'passwordInput' => 'required|min:8|confirmed',
        ]);

        // Create a new user
        $query = User::create([
            'name' => $request->namaInput,
            'email' => $request->emailInput,
            'password' => Hash::make($request->passwordInput),
        ]);

        // If the user was created successfully, redirect to the login page
        if ($query) {
            return redirect()->route('login');
        } else {
            // Otherwise, redirect back to the registration page
            return redirect()->back();
        }
    }
}
