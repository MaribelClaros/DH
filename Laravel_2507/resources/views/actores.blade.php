<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <h3>Búsqueda de actores</h3>
    <form class="" action="actores/buscar" method="get">
      <input type="text" name="buscador" value="">
      <button type="submit" name="button">Buscar</button>
    </form>

    {{-- <h4>Actores</h4>
    <ul>
      @foreach($actores as $actor)
        <li>
          <a href="actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a></li>
      @endforeach
    </ul> --}}
  </body>
</html>
