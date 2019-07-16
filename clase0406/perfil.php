<?php
if($_POST)
{
  $nombre = $_POST["nombre"];
  $colorPreferido = $_POST["colorPreferido"];

  for ($i=0; $i< $colorPreferido; $i++) {
  $colorPreferido[$i];
  $cookie_color = $colorPreferido;
  setcookie($cookie_color, $colorPreferido[$i]);
  }
  var_dump($_COOKIE);
}


 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style>

    .link {
      display:inline-block;
      padding:8px;
      text-decoration:none;
      background-color:rgba(0,0,0,0.8);
      color:white;
      margin-top: 8px;
    }
    body{
      background: <?php echo $colorPreferido?>;
    }

  </style>
</head>
<body>

  <h1>Te damos la bienvenida <?=$nombre?> </h1>

  <form action="" method="post">
    <input type="submit" name="resetear" value="Resetear colo de fondo">
  </form>

<a href="home.php" class="link">VOLVER...</a>

</body>
</html>
