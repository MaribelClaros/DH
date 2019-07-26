<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <h4>Detalle de actor</h4>
    <h6>Elegiste actor número {{$actores->id}}</h6>
    <h6>Corresponde a: {{$actores->getNombreCompleto()}}</h6>
  </body>
</html>
