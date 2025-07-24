<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credential)) {
            return redirect()->route('auth.login')->withErrors(['username' => 'Invalid credentials']);
        }
        $user = User::where('username', $request->username)->first();

        if ($user->isAdmin()) {
            return redirect()->intended('admin');
        } elseif ($user->isEditor()) {
            return redirect()->intended('editor');
        } elseif ($user->isViewer()) {
            return redirect()->intended('candidate');
        }
        return redirect()->intended('guest');
    }
}