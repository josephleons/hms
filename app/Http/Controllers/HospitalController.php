<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Doctor;

class HospitalController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hospitals = Hospital::all();
        return view('hospitals.create', compact('hospitals'));
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
            ],

        ]);

        $role = 2;
        $hospital = Hospital::create(
            [
                'name' => $request->name,
            ]
        );
        $user = User::create([
            'name' => $credentials['name'],
            'username' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'contact' => $credentials['contact'],
            'role_id' => $role
        ]);

        Doctor::create(
            [
                'hospital_id' => $hospital->id,
                'user_id' => $user->id
            ]
        );
        $hospital->save();
        return redirect()->route('admin.index')->with('status', 'Hospital added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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