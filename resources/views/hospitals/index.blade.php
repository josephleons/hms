@extends('layouts.admin')
@section('content')
    <button>
        <a href="{{ route('hospitals.create') }}">Add Hospital</a>
    </button>
    <br>
    @if ($hospitals->count())
        @foreach ($hospitals as $hospital)
            <span>Hospital {{ $hospital->name }}</span>
            <br>
        @endforeach
    @else
        <p>No Hospitals Available</p>
    @endif
@endsection
