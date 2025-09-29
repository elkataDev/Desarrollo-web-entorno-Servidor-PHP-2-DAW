<?php

/**
 * Variables. Sin formularios.(1) 12 - variables-1-07.php
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
    Tres cuadrados.
    Variables. Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>
<style>
  .contenedor {
     display: flex;
  align-items: flex-end; /* hace que los cuadrados se alineen por la base */
  gap: 0px; /*Espacio entre los bordes */
  }
</style>

<body>
  <h1>Tres cuadrados</h1>

  <p>Actualice la página para mostrar tres nuevos cuadrados.</p>

  <?php
  $cuadrado1 = random_int(50, 150);
  $cuadrado2 = random_int(50, 150);
  $cuadrado3 = random_int(50, 150);
  ?>

  <div class="contenedor">
    <svg width="<?= $cuadrado1 ?>" height="<?= $cuadrado1 ?>">
      <rect x="0" y="0" width="<?= $cuadrado1 ?>" height="<?= $cuadrado1 ?>" fill="blue" stroke="black" stroke-width="2" />
    </svg>
    <svg width="<?= $cuadrado2 ?>" height="<?= $cuadrado2 ?>">
      <rect x="0" y="0" width="<?= $cuadrado2 ?>" height="<?= $cuadrado2 ?>" fill="red" stroke="black" stroke-width="2" />
    </svg>
    <svg width="<?= $cuadrado3 ?>" height="<?= $cuadrado3 ?>">
      <rect x="0" y="0" width="<?= $cuadrado3 ?>" height="<?= $cuadrado3 ?>" fill="green" stroke="black" stroke-width="2" />
    </svg>
  </div>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>