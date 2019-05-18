<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BUCLES</title>
  </head>
  <?php
    echo "<h3>Ejercicio 1 </h3>";
    $resultado[] = 0;
    for($i = 1; $i <= 10; $i++)
    {
      echo " 2 x $i = " . $resultado[$i] = $i * 2 . "<br>";
    }
    echo "<hr>";

    echo "<h3>Ejercicio 2 </h3>";
    $i = 100;
    while($i != 85)
    {
      echo $i . "<br>";
      $i--;
    }
    echo "<hr>";

    echo "<h3>Ejercicio 3 </h3>";
    $contador = 1;
    while($contador <= 5)
    {
      echo $contador * 2 . "<br>";
      $contador++;
    }
    echo "<hr>";

    echo "<h3>Ejercicio 4 </h3>";
    $cantidadTiros = 0;
    $contadorCaras = 0;
    while ($contadorCaras < 5)
    {
      $moneda = rand(0,1);
      echo $moneda . "<br>";
      if ($moneda == 1) {
        $contadorCaras++;
      }
      $cantidadTiros++;
    }
    echo "Llevó $cantidadTiros tiros obtener 5 veces cara.";
    echo "<hr>";

    echo "<h3>Ejercicio 5 </h3>";
    $nombres = ["Alejandra", "Matias", "Magali", "Oriana", "Julieta"];
    echo "<p>Problema resuelto con un <strong>for</strong></p>";
    for ($i = 0; $i < count($nombres); $i++)
    {
      echo $nombres[$i] . "<br>";
    }
    echo "<p>Problema resuelto con un <strong>while</strong></p>";
    $i = 0;
    while ($i < count($nombres)) {
      echo $nombres[$i] . "<br>";
      $i++;
    }
    echo "<p>Problema resuelto con un <strong> do while</strong></p>";
    $i = 0;
    do {
      echo $nombres[$i]. "<br>";
      $i++;
    } while ($i < count($nombres));
    echo "<p>Problema resuelto con un <strong>foreach</strong></p>";
    foreach ($nombres as $nombre) {
      echo $nombre . "<br>";
    }
    echo "<hr>";

    echo "<h3>Ejercicio 6 </h3>";
    $array = range(0, 9);
    foreach ($array as $valor) {
      $valor = rand(0, 10);
      if ($valor == 5) {
        echo "Se encontró un 5!";
        break;
      } else {
        echo $valor . "<br>";
      }
    }
    echo "<hr>";

    echo "<h3>Ejercicio 7 </h3>";
    $array = range(0, 9);
    $contador = 0;
    foreach ($array as $v) {
      $v = rand(0, 100);
      echo $v . "<br>";
      if ($v % 2 == 0) {
        $contador++;
      }
    }
    echo "Hay $contador números pares.";

    echo "<hr>";
    echo "<h3>Ejercicio 8 </h3>";
    $mascota = [
      "animal" => "jirafa",
      "edad" => 4,
      "altura" => 2.75,
      "nombre" => "Pinky",
    ];
    foreach ($mascota as $clave => $valor) {
      echo "$clave: $valor <br>";
    }

    echo "<hr>";
    echo "<h3>Ejercicio 9 </h3>";
    $ceu = array( "Italia" => "Roma",
    "Luxembourg" => "Luxembourg",
    "Bélgica" => "Bruselas",
    "Dinamarca" => "Copenhagen",
    "Finlandia" => "Helsinki",
    "Francia" => "Paris",
    "Slovakia" => "Bratislava",
    "Eslovenia" => "Ljubljana",
    "Alemania" => "Berlin",
    "Grecia" => "Athenas",
    "Irlanda" => "Dublin",
    "Holanda" => "Amsterdam",
    "Portugal" => "Lisbon",
    "España" => "Madrid",
    "Suecia" => "Stockholm",
    "Reino Unido" => "London",
    "Chipre" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Republica Checa" => "Prague",
    "Estonia" => "Tallin",
    "Hungría" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valletta",
    "Austria" => "Vienna",
    "Polonia" => "Warsaw") ;
    foreach ($ceu as $pais => $capital) {
      echo "$pais: $capital <br>";
    }

    echo "<hr>";
    echo "<h3>Ejercicio 10 </h3>";
    $ceu = [
      "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
      "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
      "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
      "Francia" => ["Paris", "Nantes", "Lyon"],
      "Italia" => ["Roma", "Milan", "Venecia"],
      "Alemania" => ["Munich", "Berlin", "Frankfurt"]
    ];
    foreach ($ceu as $pais => $provincias) {
      echo "Las ciudades de $pais son: ";
      foreach ($provincias as $provincia) {
        echo "<ul>
        <li>$provincia</li>
        </ul>
        ";
      }
      echo "<br>";
    }

    echo "<hr>";
    echo "<h3>Ejercicio 11 </h3>";
    $ceu = [
      "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "esAmericano" => true],
      "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", "esAmericano" => true],
      "Colombia" => ["Cartagena", "Bogota", "Barranquilla", "esAmericano" => true],
      "Francia" => ["Paris", "Nantes", "Lyon", "esAmericano" => false],
      "Italia" => ["Roma", "Milan", "Venecia", "esAmericano" => false],
      "Alemania" => ["Munich", "Berlin", "Frankfurt", "esAmericano" => false]
    ];
    foreach ($ceu as $pais => $provincias) {
      if ($provincias["esAmericano"] == true) {
        echo "Las ciudades de $pais son: ";
        foreach ($provincias as $provincia) {
          echo "<ul>
          <li>$provincia</li>
          </ul>
          ";
        }
        echo "<br>";
      }
    }

    echo "<hr>";
    echo "<h2>Embedding</h2>";
    echo "<h3> Ejercicio 1 </h3";

   ?>

  </body>
</html>
