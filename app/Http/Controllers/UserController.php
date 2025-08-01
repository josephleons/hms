<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
            'contact' => [
                'required',
                'string'
            ]
        ]);

        $role = 1;

        $user = User::create([
            'name' => $credentials['name'],
            'username' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'contact' => $credentials['contact'],
            'role_id' => $role
        ]);

        Patient::create(
            [
                'user_id' => $user->id
            ]
        );


        $user->save();
        return redirect()->route('auth.index')->with('success', 'User Account Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}