<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primera clase PHP</title>
  </head>
  <body>
    <?php
      $persona = [
        "nombre" => "Jon",
        "apellido" => "Snow",
        "edad" => 27,
        "hobbies" => ["Netflix", "Fútbol", "Programar"]
      ];
      var_dump($persona);
      $persona["edad"] = 25;
      echo "<br>";
      echo $persona["edad"];
      echo "<p> Ejercicio 4 </p>";
      $persona["hobbies"][] = "Dormir";
      $persona["dirección"] = "Winterfell";
      var_dump($persona);
      echo "<h2> Condicionales </h2>";
      $numero1 = 37;
      $numero2 = 46;
      echo "<p> Ejercicio 1 </p>";
      if($numero1 > $numero2)
      {
        echo "El mayor es $numero1";
      } else
      {
        echo "El mayor es $numero2";
      }
      echo "<p> Ejercicio 2 </p>";
      $resultado = rand(1,5);
      if ($resultado == 3 || $resultado == 5)
      {
        echo $resultado;
      }
      echo "<p> Ejercicio 3 </p>";
      $resultado = rand(1,5);
      if ($resultado != 3)
      {
        echo "El resultado NO es 3";
      } else {
        echo 3;
      }
      echo "<p> Ejercicio 4 </p>";
      $mayor = rand(1,100);
      if ($mayor > 50) {
        echo "El número es mayor a 50";
      } elseif ($mayor < 50) {
        echo "El número es menor a 50";
      } else {
        echo 50;
      }
      echo "<p> Ejercicio 5 </p>";
      $nombreDeUsuario = "admin";
      $contraseniaDeUsuario = "1234";
      if ($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234") {
        echo "Bienvenida!";
      } elseif ($nombreDeUsuario != "admin" && $contraseniaDeUsuario == "1234") {
        echo "Nombre de usuario incorrecto. Por favor, reingrese:";
      } elseif ($nombreDeUsuario == "admin" && $contraseniaDeUsuario != "1234") {
        echo "Contraseña incorrecta. Por favor, reingrese:";
      } else {
        echo "Nombre de usuario y contraseña incorrectos. Por favor, reingrese:";
      }
     ?>
  </body>
</html>
