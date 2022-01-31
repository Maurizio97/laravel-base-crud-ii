@extends('layouts.main-layout')
@section('content')
    <h1>Film:</h1>
    <h1>
        Title: {{ $film -> title }}
    </h1>
    <div>
        Subtitle: {{ $film -> subtitle }}
    </div>
    <div>
        Date: {{ $film -> release_date }}
    </div><br><br>
    <a href="{{ route('home') }}">Go To Home</a>

@endsection