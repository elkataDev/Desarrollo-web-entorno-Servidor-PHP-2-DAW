<?php

/**
 * if ... else ... (1) 4 - if-else-1-4.php
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
    Tres dados. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tres dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <?php
  // Array de imágenes
  $arrayImagenes = [null, "img/1.svg", "img/2.svg", "img/3.svg", "img/4.svg", "img/5.svg", "img/6.svg"];

  // Generar tirada de dados aleatorios
  $dado1 = $arrayImagenes[random_int(1, 6)];
  $dado2 = $arrayImagenes[random_int(1, 6)];
  $dado3 = $arrayImagenes[random_int(1, 6)];

  // Valores numéricos de los dados
  $num1 = array_search($dado1, $arrayImagenes);
  $num2 = array_search($dado2, $arrayImagenes);
  $num3 = array_search($dado3, $arrayImagenes);

  //Determinar el resultado
  $resultado = "";

  if ($num1 == $num2 && $num1 == $num3) {
    $resultado = "Es un trío";
  } elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
    $resultado = "Es una pareja";
  } else {
    $max = max($num1, $num2, $num3);
    $resultado = "El valor mas alto es: $max.";
  }
  ?>
  <div>
    <img src="<?php echo $dado1 ?>" alt="dado 1">
    <img src="<?php echo $dado2 ?>" alt="dado 2">
    <img src="<?php echo $dado3 ?>" alt="dado 3">
  </div>
  <p>Resultado: <?php echo $resultado?></p>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>