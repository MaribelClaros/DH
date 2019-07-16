<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form action="perfil.php" method="post">

    <h3>Nombre:
      <input type="text" name="nombre" value="">
    </h3>

    <h3>¿Cuál es tu color preferido?
      <select name="colorPreferido">
        <option value="" >Elegí un color...</option>
        <option value="red" name="">Rojo</option>
        <option value="blue" name="">Azul</option>
        <option value="green" name="">Verde</option>
        <option value="yellow" name="">Amarillo</option>
        <option value="orange" name="">Naranja</option>
      </select>
    </h3>

    <p>
      <input type="submit" name="setear" value="Enviar">
    </p>

  </form>

</body>
</html>
