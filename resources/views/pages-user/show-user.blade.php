@extends('layouts.main-layout')
@section('content')
    <h1>USER</h1>
    <div>
        <span>Name:</span> <span class="val">{{ $user -> name }}</span>
    </div>
    <div>
        <span>Lastname:</span> <span class="val">{{ $user -> lastname }}</span>
    </div>
    <div>
        <span>Username:</span> <span class="val">{{ $user -> username }}</span>
    <div>
        <span>Email:</span> <span class="val">{{ $user -> email }}</span>
    </div>
    <div>
        <span>Password:</span> <span class="val">{{ $user -> password }}</span>
    </div><br><br>
    <a href="{{ route('userHome') }}">Go To Home</a>
