<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totaljobs = Job::count('resume_score');
        $jobs = Job::with('state')->get();
        return view('jobs.index', compact('jobs'));
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
        $request->validate([
            'title' => 'required|string',
            'department' => 'required|string',
            'location' => 'required|string',
            'salary' => 'required|int',
            'score' => 'required|int',
            'resume_score' => 'required|int',

        ]);
        $state_id = 1;
        $job = Job::create([
            'title' => $request->title,
            'department' => $request->department,
            'location' => $request->location,
            'salary' => $request->salary,
            'score' => $request->score,
            'resume_score' => $request->resume_score,
            'state_id' => $state_id
        ]);

        return redirect()->route('editor.index')->with(['success', 'Job Addes Success']);
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