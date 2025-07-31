@extends('layouts.doctor')
@section( 'content')
<h4>    Doctor Appointment List</h4>
<hr>
<ul>
    @foreach($appointments as $appointment)
        <li>Doctor Name : {{$appointment->doctor->user->name}}</li>  
        <li>Appointment Description : {{$appointment->description}}</li>  
        <li>Email Address : {{$appointment->doctor->email}}</li>  
        <li>Contact: {{$appointment->doctor->user->contact}}</li>   
        <li>Date To: {{$appointment->dateFrom}}</li>  
        <li>Date To: {{$appointment->dateTo}}</li>  
        <li>Patient Name : {{$appointment->patient->user->name}}</li>
         <li>Patient Email : {{$appointment->patient->user->email}}</li>
        <br>
    @endforeach
</ul>
@endsection