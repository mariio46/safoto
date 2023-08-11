<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    //
    public function index()
    {
        return view('auth.sign-in');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->isAdmin == 1) {
                // code...
                return to_route('usersmanagement.index');
            }

            return to_route('dashboard');
        }

        return back()->with('loginError', 'Login Failed!!!');
    }

    public function signOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('signin');
    }
}
