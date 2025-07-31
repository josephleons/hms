<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\alert;

class DoctorController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doctors.index');
    }
    public function appointment()
    {

        $user = Auth::user()->doctor;
        if (!$user) {
            return redirect()->route('doctors.index')->with('error', 'You Dont have any Appointment');
        }
        $appointments = Appointment::with('doctor', 'patient')->where('doctor_id', $user->id)->get();
        return view('doctors.appointment', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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