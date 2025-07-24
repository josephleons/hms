@extends('layouts.editor')
@section('content')
<p>Post Jobs here</p>
 @if(session('success'))
        <span>{{$message}}</span>
    @endif
<form action="{{route('jobs.store')}}" method="POST" style="padding: 2px">
    @csrf
    <div class="row" style="padding: 8px;margin:2em">
        <dv>
        <label>Title</label>
        <input type="text" name="title" placeholder="Title Job">
    </dv>
     <dv>
        <label>department</label>
        <input type="text" name="department" placeholder="Title Job">
    </dv>
     <dv>
        <label>location</label>
        <input type="text" name="location" placeholder="location Job">
    </dv><br>
     <dv>
        <label>salary</label>
        <input type="number" name="salary" placeholder="salary Job">
    </dv>
    <dv>
        <label>Location Score</label>
        <input type="number" name="score" placeholder="Location Preority Score">
    </dv><br>
    <dv>
        <label>Resume Score</label>
        <input type="number" name="resume_score" placeholder="Setting Resume Score">
    </dv>
  <button type="submit">Add Job</button>
    </div>
</form>
@endsection
