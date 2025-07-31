@extends('layouts.admin')
@section('content')
    <p> Welcome Login As {{ Auth::user()->username }}</p>
    <div>
        <h4> Dashboard:Summary Report</h4>
    </div>
    <form>
        <span style="padding:8px"><input style="padding:4px; border-radius: 4px;" type="text" name='search'>
        </span>
        <span><button
                style="padding:4px; background-color:rgb(52, 111, 189);border-radius: 8px;"type="submit">Search</button>
        </span>
    </form><br>
    <div style="border-radius: 8px;margin:10px">
        <span
            style="padding:10px; margin:10px ;background-color:rgb(52, 111, 189);border-radius: 8px;color:aliceblue;font-size:">Appointment
            ({{ $totalappointment }})
        </span>
        <span
            style="padding:10px;margin:10px ;background-color:rgb(228, 164, 164);border-radius: 8px;color:aliceblue;">Doctors
            ({{ $totaldoctor }})
        </span>
        <span style="padding:10px;margin:10px; background-color:black;border-radius: 8px;color:aliceblue;">
            Patients
            ({{ $totalpatient }})
        </span>
        <span style="padding:10px;margin:10px; background-color:black;border-radius: 8px;color:aliceblue;">
            Hospital
            ({{ $totalhospitals }})
        </span>
    </div>
@endsection
