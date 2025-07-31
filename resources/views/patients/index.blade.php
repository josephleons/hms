@extends('layouts.patient')
@section('content')
    <h4>Logged As {{ Auth::user()->username }}</h4>
    @if (session('error'))
        <div class="alert alert-danger" style="color: rgb(28, 121, 77)">
            {{ session('error') }}
        </div>
    @endif
    <h4>Doctors and Hospital</h4>
    <ul>
        @if ($doctors->count())
            @foreach ($doctors as $doctor)
                <li>{{ $doctor->id }}</li>
                <li>{{ $doctor->user->name }}</li>
                <li>{{ $doctor->user->email }}</li>
                <li>{{ $doctor->user->contact }}</li>
                <li>{{ $doctor->hospital->name }}</li>
                <button type="button">
                    <a href="{{ route('appointments.show', $doctor->id) }}"> Make Appointment </a>
                </button>
                <button>
                    <a href="{{ route('appointments.create', $doctor->id) }}">view Doctor </a>
                </button>
            @endforeach
        @else
            <p style="color: aquamarine">No Available Doctor</p>
        @endif
    </ul>
@endsection
