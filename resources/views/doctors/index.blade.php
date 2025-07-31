@extends('layouts.doctor')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h4> Doctor Appointment List</h4>
    <hr>
@endsection
