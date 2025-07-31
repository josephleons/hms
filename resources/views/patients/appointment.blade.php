@extends('layouts.patient')
@section('content')

    <h4>Doctors and Hospital</h4>
    <ul>
        @if ($doctors)
            @foreach ($doctors as $doctor)
                <li>{{ $doctor->id }}</li>
                <li>{{ $doctor->user->name }}</li>
                <li>{{ $doctor->user->email }}</li>
                <li>{{ $doctor->user->contact }}</li>
                <li>{{ $doctor->Hospital->name }}</li>
                <button type="button">
                    <a href="{{ route('appointments.show', $doctor->id) }}"> view Doctor </a>
                </button>
            @endforeach
        @else
            <p>No Available </p>
        @endif
    </ul>
    <p>All Appointment</p>
    <ul>
        @foreach ($appointments as $appointment)
            <li>Doctor : {{ $appointment->id }}</li>
            <li>Description : {{ $appointment->description }}</li>
            <li>Contact : {{ $appointment->doctor->user->email }}</li>
            <li>Date From: {{ $appointment->doctor->user->contact }}</li>
            <li>Date To: {{ $appointment->dateFrom }}</li>
            <li>Date To: {{ $appointment->dateTo }}</li>
            <li>Status {{ $appointment->state->name }}</li>
            <li>
                <span>
                    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input hidden name="state_id" value="{{ $appointment->state->id }}">
                        <button type="submit" style="background-color: rgb(255, 129, 129)" name="submit"
                            onclick="return confirm('Do you want to cancel ?')">cancel appointment
                        </button>
                    </form>
                </span>
            </li>
            @if (session('success'))
                <div style="color: rgb(190, 72, 72)">
                    {{ session('success') }}
                </div>
            @endif
        @endforeach
    </ul>














































@endsection
