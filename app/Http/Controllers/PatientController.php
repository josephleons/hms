<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('user','hospital')->get();
        return view('patients.index',compact('doctors'));
    }

    public function appointment()
    {


        $patientId = Auth::user()->patient;

        if (!$patientId) {
            return redirect()->route('patients.index')->with('error', "You Don't have any Appointments");
        }
        $doctors = Doctor::with('user', 'hospital')->get();
        $appointments = Appointment::with('doctor', 'patient', 'state')->where('patient_id', $patientId->id)->take(value: 3)->get();
        return view('patients.appointment', compact('doctors', 'appointments'));
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