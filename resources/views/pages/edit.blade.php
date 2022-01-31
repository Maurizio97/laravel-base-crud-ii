@extends('layouts.main-layout')
@section('content')
    <h1>Update New Film:</h1>

    <a href="{{ route('home') }}">Go To Home</a><br><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $film -> id) }}" method="POST">

        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name='title' placeholder="title" value="{{ $film -> title }}"><br>
        <label for="subtitle">Subitle:</label>
        <input type="text" name='subtitle' placeholder="subtitle" value="{{ $film -> subtitle }}"><br>
        <label for="release_date">Release Date:</label>
        <input type="date" name='release_date' placeholder="release_date" value="{{ $film -> release_date }}"><br>
        <input type="submit" value="UPDATE">
    </form>
@endsection