<?php

/**
 * if ... else ... (1) 2 - if-else-1-2.php
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
    Dado más alto. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Dado más alto</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>
      <?php
      //Array de imagenes
      $arrayImagenes = [null, "img/1.svg", "img/2.svg", "img/3.svg", "img/4.svg", "img/5.svg", "img/6.svg"];

      //imagen aleatoria
      $dado1 = $arrayImagenes[random_int(1, 6)];
      $dado2 = $arrayImagenes[random_int(1, 6)];

      //Resultado
      $resultado = "";
      if ($dado1 > $dado2) {
        $resultado = "Gana el jugador 1";
      } elseif ($dado2 > $dado1) {
        $resultado = "Gana el jugador 2";
      } else {
        $resultado = "Empate";
      }
      ?>
  <table>
    <tr>
      <th>Jugador 1</th>
      <th>Jugador 2</th>
      <th>Resultado: <?php echo $resultado?></th>
    </tr>
    <tr>
      <div>
        <img src="<?php echo $dado1 ?>" alt="dado 1">
        <img src="<?php echo $dado2 ?>" alt="dado 2">
      </div>
    </tr>
  </table>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>