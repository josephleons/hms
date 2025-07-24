@extends('layouts.app')
@section('content')
<table>
    <thead>
    <tr style="text-transform: capitalize">
        <th>Title</th>
        <th>department</th>
        <th>location</th>
        <th>salary</th>
        <th>State</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>Title :{{$job->title}}</td>
                <td>department :{{$job->department}}</td>
                <td>location :{{$job->location}}</td>
                <td>salary :{{$job->salary}}</td>
                <td>State :{{$job->state->name}}</td>
                <td>Action</td>
                <td>
                    <span>
                        <a href="{{$job->state->id}}">view</a>
                    </span>
                </td>
            </tr>
         @endforeach
    </tbody>
</table>
