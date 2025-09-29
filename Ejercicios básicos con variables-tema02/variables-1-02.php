<?php

/**
 * Variables. Sin formularios.(1) 2 - variables-02.php
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
    Círculo de color.
    Variables. Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>Círculo de color</h1>
  <p>Actualice la página para mostrar un nuevo círculo.</p>
  <?php
  $primerColor = random_int(0, 255);
  $segundoColor = random_int(0, 255);
  $tercerColor = random_int(0, 255);
  $rgb = "rgb(" . $primerColor . "," . $segundoColor . "," . $tercerColor . ")";
  echo "Color: ".$rgb; ?>

  <div>
    <svg height="100" width="100">
      <circle r="45" cx="50" cy="50" fill=<?php echo $rgb ?> />
    </svg>
  </div>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>