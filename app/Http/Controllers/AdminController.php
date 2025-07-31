<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\User;

class AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()) {
            redirect()->route('auth.index')->withErrors(['status' => 'Login first']);
        }
        $totalappointment = Appointment::count('*');
        $totaldoctor = Doctor::count('*');
        $totalpatient = Patient::count('*');
        $totalhospitals = Hospital::count('*');

        $appointments = Appointment::with('patient', 'doctor', 'state')->get();
        return view('admin.index', compact(
            'appointments',
            'totalappointment',
            'totaldoctor',
            'totalpatient',
            'totalhospitals'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hospitals = Hospital::all();
        return view('admin.create', compact('hospitals'));
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
            'hospital_id' => ['required', 'string', 'exists:hospitals,id'],
        ]);

        $role = 2;

        $user = User::create([
            'name' => $credentials['name'],
            'username' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'contact' => $credentials['contact'],
            'role_id' => $role
        ]);

        $doctor = Doctor::create(
            [
                'hospital_id' => $request->hospital_id,
                'user_id' => $user->id
            ]
        );


        $user->save();
        return redirect()->route('users.index')->with('success', 'User Account Created');
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
        $appointments = Appointment::findOrFail($id);
        return view('admin.show', $appointments);
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