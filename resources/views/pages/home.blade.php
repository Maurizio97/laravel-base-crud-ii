@extends('layouts.main-layout')
@section('content')

    <nav>
        <div>
            <a href="">
                <h2>
                    Subscribe
                </h2>
            </a>
        </div>
        <div>
            <a href="">
                <h2>
                    Sign in
                </h2>
            </a>
        </div>
    </nav>
    <section>
        <h1>List User</h1>
        <ul>
            @foreach ($users as $user)
                <li>
                    <span>
                        <a href="">
                            Utente n.{{ $user -> id }}: <br>
                        </a>
                    </span>
                    <span>- Nome:</span> <span class="val">{{ $user -> name }}</span><br>
                    <span>- Cognome:</span> <span class="val">{{ $user -> lastname }}</span><br>
                    <span>- User Name:</span> <span class="val">{{ $user -> user_name }}</span><br>
                </li>
            @endforeach
        </ul>
    </section>

    {{-- <h1>List Film:</h1>

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
    </ul> --}}
@endsection