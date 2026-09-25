@extends('layouts.app')

@section('content')

    <h1>Lista Film</h1>

    <div class="movies-container">

        @foreach ($movies as $movie)

            <div class="movie-card">
                <h2>{{ $movie->title }}</h2>

                <p><strong>Titolo originale:</strong> {{ $movie->original_title }}</p>
                <p><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
                <p><strong>Data:</strong> {{ $movie->date }}</p>
                <p><strong>Voto:</strong> {{ $movie->vote }}</p>
            </div>

        @endforeach

    </div>

@endsection