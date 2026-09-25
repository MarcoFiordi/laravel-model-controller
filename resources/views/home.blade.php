<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div>
            <h2>{{ $movie->title }}</h2>
            <p>
                Titolo originale:
                {{ $movie->original_title }}
            </p>

            <p>
                Nazionalità:
                {{ $movie->nationality }}
            </p>

            <p>
                Data:
                {{ $movie->date }}
            </p>

            <p>
                Voto:
                {{ $movie->vote }}
            </p>
        </div>
    @endforeach
</body>
</html>