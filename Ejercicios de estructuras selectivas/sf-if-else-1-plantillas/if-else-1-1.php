<?php

/**
 * if ... else ... (1) 1 - if-else-1-1.php
 *
 * @author Antonio Espinola Ramirez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Dos dados.
    if .. elseif ... else ... (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dos dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <?php
  //Array de imagenes
  $arrayImagenes = [null, "img/1.svg", "img/2.svg", "img/3.svg", "img/4.svg", "img/5.svg", "img/6.svg"];

  //imagen aleatoria
  $dado1 = $arrayImagenes[random_int(1, 6)];
  $dado2 = $arrayImagenes[random_int(1, 6)];

  //comprobacion de parejas y valor mas alto
  $sonPareja = "No son pareja";
  $valorAlto = array_search($dado1,$arrayImagenes);

  if ($dado1 === $dado2) {
    $sonPareja = "Son pareja";
  } elseif ($dado2 > $dado1) {
    $valorAlto = array_search($dado2,$arrayImagenes);
  }
  ?>
  <div>
    <img src="<?php echo $dado1?>" alt="dado 1">
    <img src="<?php echo $dado2?>" alt="dado 2">
    <p><?php echo $sonPareja?>. El valor mas alto es <?php echo $valorAlto?></p>
  </div>


  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>