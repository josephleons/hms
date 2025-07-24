@extends('layouts.admin')
@section('content')
<h5>Dashboard</h5>
<p>Job Application Summary:Applied Candidate Summary</p><hr>
@foreach( $applications  as $application)
<ul class="lead" style="text-align:left; text-transform: capitalize;list-style:none">
    <li>Candidate Name :<strong>{{$application->user->name}}</strong></li>
    <li>Position Applied : <strong>{{$application->job->title}}</strong></li>
    <li>Resume Score : <strong>{{$application->job->resume_score}}</strong></li>
    <li>Location Priority Points :<strong>{{$application->job->score}}</strong> </li>
    <li>Final Score : {{($application->job->resume_score) + ($application->job->score )}}
    <li>
        <strong>
        Application Process Successfull
       </strong>
    </li>
</li>
</ul>
@endforeach
@endsection