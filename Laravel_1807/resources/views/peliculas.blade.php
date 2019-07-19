<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @if ($peliculas)
      <h1>Peliculas</h1>
      <ul>
        @foreach($peliculas as $pelicula)
          <li>
            {{ $pelicula }}
          </li>
        @endforeach
        </ul>
    @else
      {{ "No hay peliculas" }}
    @endif
  </body>
</html>
