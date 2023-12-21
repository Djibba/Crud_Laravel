<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {

        // User::create([
        //     'name' => 'DJibba',
        //     'email' => 'djibba@gmail.com',
        //     'password' => Hash::make('1234')
        // ]);

        return view('security.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return to_route('index');
        }

        return back()->with([
            'error' => 'Email ou mot de passe incorrect.',
        ]);
    }
}
