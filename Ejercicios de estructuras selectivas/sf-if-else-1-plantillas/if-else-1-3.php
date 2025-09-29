<?php

/**
 * if ... else ... (1) 3 - if-else-1-3.php
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
    Dos dados más altos. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Dos dados más altos</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <tr>
      <th>Jugador 1</th>
      <th>Jugador 2</th>
      <th>Resultado</th>
    </tr>
    <tr>
    <tr>
      <?php
   // Array de imágenes
      $arrayImagenes = [null, "img/1.svg", "img/2.svg", "img/3.svg", "img/4.svg", "img/5.svg", "img/6.svg"];

      // Generar tirada de dados aleatorios para cada jugador
      $dado1 = $arrayImagenes[random_int(1, 6)];
      $dado2 = $arrayImagenes[random_int(1, 6)];
      $dado3 = $arrayImagenes[random_int(1, 6)];
      $dado4 = $arrayImagenes[random_int(1, 6)];

      // Asignar valores numéricos a cada dado
      $num1 = array_search($dado1, $arrayImagenes);
      $num2 = array_search($dado2, $arrayImagenes);
      $num3 = array_search($dado3, $arrayImagenes);
      $num4 = array_search($dado4, $arrayImagenes);

      // Comprobar si cada jugador tiene una pareja
      $esParejaJugador1 = ($num1 == $num2);
      $esParejaJugador2 = ($num3 == $num4);

      // Calcular la suma de los puntos de cada jugador
      $puntosJugador1 = $num1 + $num2;
      $puntosJugador2 = $num3 + $num4;

      // Determinar el resultado
      $resultado = "";

      if ($esParejaJugador1 && $esParejaJugador2) {
        if ($num1 > $num3) {
          $resultado = "Jugador 1 Gana";
        } elseif ($num1 < $num3) {
          $resultado = "Jugador 2 Gana";
        } else {
          $resultado = "Empate";
        }
      } elseif ($esParejaJugador1) {
        $resultado = "Jugador 1 Gana";
      } elseif ($esParejaJugador2) {
        $resultado = "Jugador 2 Gana";
      } elseif ($puntosJugador1 > $puntosJugador2) {
        $resultado = "Jugador 1 Gana";
      } elseif ($puntosJugador1 < $puntosJugador2) {
        $resultado = "Jugador 2 Gana";
      } else {
        $resultado = "Empate";
      }
      ?>

      <td style="background-color: red;"><img src=<?php echo $dado1 ?>></td>
      <td style="background-color: red;"><img src=<?php echo $dado2 ?>></td>
      <td style="background-color: blue;"><img src=<?php echo $dado3 ?>></td>
      <td style="background-color: blue;"><img src=<?php echo $dado4 ?>></td>
      <td><?php echo $resultado?></td>

    </tr>
  </table>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>