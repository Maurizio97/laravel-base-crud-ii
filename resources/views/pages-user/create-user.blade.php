@extends('layouts.main-layout')
@section('content')
    <h1>SUBSCRIBE:</h1>

    <a href="{{ route('userHome') }}">Go To Home</a>
    <br><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('userStore') }}" method="POST">

        @method("POST")
        @csrf

        <label for="name">Name:</label>
        <input type="text" name='name' placeholder="name"><br>

        <label for="lastname">Lastname:</label>
        <input type="text" name='lastname' placeholder="lastname"><br>

        <label for="username">Username:</label>
        <input type="text" name='username' placeholder="username"><br>

        <label for="email">Email:</label>
        <input type="text" name='email' placeholder="email"><br>

        <label for="password">Password:</label>
        <input type="text" name='password' placeholder="password"><br>
        
        <input type="submit" value="CREATE">
    </form>
@endsection