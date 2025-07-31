<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;

use function Pest\Laravel\head;

class AppointmentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('hospital', 'user');
        return view('appointments.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'description' => 'required|string|max:255',
            'dateFrom' => 'required|',
            'dateTo' => 'required'
        ]);

        $patient = Auth::user()->patient;
        if (!$patient) {
            return redirect()->route('patients.index')->with('error', 'You must be a patient to make an appointment.');
        }

        $state = 1;
        $appoint = Appointment::create([
            'patient_id' => $patient->id,
            'doctor_id' => $request->doctor_id,
            'description' => $request->description,
            'dateFrom' => $request->dateFrom,
            'dateTo' => $request->dateTo,
            'state_id' => $state
        ]);

        return redirect()->route('patients.index')->with('success', 'Appointment Successfull Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('appointments.show', compact('doctor'));
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
        $request->validate([
            'state_id' => 'required|exists:state,id'
        ]);


        $appointment = Appointment::findOrFail($id);
        $state = 2;
        $appointment->update([
            'state_id' => $state
        ]);
        return redirect()->back()->with('success', 'Appointment is Cancelling');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}