@extends('layouts.main-layout')
@section('content')
    <h1>List Film:</h1>

    <a href="{{ route('create') }}">
        CREATE NEW FILM
    </a>
    <ul>
    @foreach ($films as $film)
        <li>
            <a href="{{ route('show', $film -> id) }}">
            {{ $film -> title }}
            </a> 
            - {{ $film -> release_date }}
            - <a href="{{ route('edit', $film -> id) }}">UPDATE</a>
            - <a href="{{ route('delete', $film -> id) }}">DELETE</a>
        </li>
    @endforeach
    </ul>
@endsection