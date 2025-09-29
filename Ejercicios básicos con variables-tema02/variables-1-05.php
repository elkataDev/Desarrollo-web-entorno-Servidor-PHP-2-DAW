<?php

/**
 * Variables. Sin formularios.(1) 5 - variables-1-05.php
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
    Círculos de color.
    Variables. Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>
<style>
  .circulos-container {
    position: relative;
    width: 300px;
    height: 200px;
  }

  .circulo {
    position: absolute;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    opacity: 0.8;
  }

  .circulo1 {
    border: 3 px solid black;
    top: 0;
    left: 70px;
  }

  .circulo2 {
    border: 3 px solid black;
    top: 0;
    right: 50px;
  }

  .circulo3 {
    border: 3 px solid black;
    top: 50px;
    left: 90px;
  }
</style>

<body>
  <h1>Círculos de color</h1>

  <p>Actualice la página para mostrar tres nuevos círculos.</p>

  <?php
  //Transparencia fija
  $transparencia = 0.7;

  //obtengo el numero del color
  $rgbColor1 = random_int(64, 255);
  $rgbColor2 = random_int(64, 255);
  $rgbColor3 = random_int(64, 255);

  //Obtengo los colores del circulo
  $rgba1 = "rgba(" . $rgbColor1 . ",0,0," . $transparencia . ")"; //rojo
  $rgba2 = "rgba(0," . $rgbColor2 . ",0," . $transparencia . ")"; //verde
  $rgba3 = "rgba(0,0," . $rgbColor3 . "," . $transparencia . ")"; //azul

  ?>
  <div class="circulos-container">
    <div class="circulo circulo1">
      <svg height="100" width="100" stroke='black' stroke-width ='2'>
        <circle r="45" cx="50" cy="50" fill=<?php echo $rgba1 ?> />
      </svg>
    </div>
    <div class="circulo circulo2">
      <svg height="100" width="100" stroke='black' stroke-width ='2'>
        <circle r="45" cx="50" cy="50" fill=<?php echo $rgba2 ?> />
      </svg>
    </div>
    <div class="circulo circulo3">
      <svg height="100" width="100" stroke='black' stroke-width ='2'>
        <circle r="45" cx="50" cy="50" fill=<?php echo $rgba3 ?> />
      </svg>
    </div>
  </div>
  <p> Rojo : <?php echo $rgbColor1 ?></p>
  <p> Verde : <?php echo $rgbColor2 ?></p>
  <p> Azul : <?php echo $rgbColor3 ?></p>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>