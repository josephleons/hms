<p>Doctor Info</p>
@extends('layouts.patient')
@section('content')
 <form action="{{route('appointments.store')}}" method="POST">
        @csrf
        
        {{Auth::user()->username}}<br>
        {{$doctor->user->name}}<br>
        <input hidden name="doctor_id" value="{{$doctor->id}}"><br>
        
        <label for='Description'>Description</label> <br>
        <textarea type="text" name="description"></textarea>
        <br>
        <label for='contact'>contact</label>
        <input value="{{Auth::user()->contact}}"><br>

        <label for='date from'>Date From</label>
        <input type="date" name="dateFrom"><br>
        
        <label for='date To'>Date To</label>
        <input type="date" name="dateTo"><br>
        <input type="submit" name="submit">
    </form>
    @endsection