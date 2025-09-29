<?php

/**
 * if ... else ... (1) 5 - if-else-1-5.php
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
    Tres dados más altos. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Tres dados más altos</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <tr>
      <th>Jugador 1</th>
      <th>Jugador 2</th>
      <th>Resultado</th>
    </tr>
    <tr>
      <?php

      // Array de imágenes
      $arrayImagenes = [null, "img/1.svg", "img/2.svg", "img/3.svg", "img/4.svg", "img/5.svg", "img/6.svg"];
      
      // Generar 3 dados aleatorios para cada jugador
      function tirarDados($arrayImagenes)
      {
        return [
          random_int(1, 6),
          random_int(1, 6),
          random_int(1, 6),
        ];
      }

      $dadosJugador1 = tirarDados($arrayImagenes);
      $dadosJugador2 = tirarDados($arrayImagenes);

      // Funciones para detectar trío, pareja y sumar puntos
      function obtenerTrio($dados)
      {
        $contador = array_count_values($dados);
        foreach ($contador as $num => $cantidad) {
          if ($cantidad === 3) return $num;
        }
        return null;
      }

      function obtenerPareja($dados)
      {
        $contador = array_count_values($dados);
        foreach ($contador as $num => $cantidad) {
          if ($cantidad === 2) return $num;
        }
        return null;
      }

      function sumaDados($dados)
      {
        return array_sum($dados);
      }

      // Detecto trio, parejas y puntos
      $trio1 = obtenerTrio($dadosJugador1);
      $trio2 = obtenerTrio($dadosJugador2);

      $pareja1 = obtenerPareja($dadosJugador1);
      $pareja2 = obtenerPareja($dadosJugador2);

      $suma1 = sumaDados($dadosJugador1);
      $suma2 = sumaDados($dadosJugador2);

      // Resultado

      if ($trio1 !== null && $trio2 !== null) {
        // Ambos tienen trío, gana el de mayor valor
        if ($trio1 > $trio2) {
          $ganador = "Gana Jugador 1";
        } elseif ($trio2 > $trio1) {
          $ganador = "Gana Jugador 2";
        } else {
          $ganador = "Empate";
        }
      } elseif ($trio1 !== null) {
        $ganador = "Gana Jugador 1";
      } elseif ($trio2 !== null) {
        $ganador = "Gana Jugador 2";
      } elseif ($pareja1 !== null && $pareja2 !== null) {
        // Ambos tienen pareja, gana el de pareja mayor
        if ($pareja1 > $pareja2) {
          $ganador = "Gana Jugador 1";
        } elseif ($pareja2 > $pareja1) {
          $ganador = "Gana Jugador 2";
        } else {
          // Pareja igual, gana quien tiene mayor suma total
          if ($suma1 > $suma2) {
            $ganador = "Gana Jugador 1";
          } elseif ($suma2 > $suma1) {
            $ganador = "Gana Jugador 2";
          } else {
            $ganador = "Empate";
          }
        }
      } elseif ($pareja1 !== null) {
        $ganador = "Gana Jugador 1";
      } elseif ($pareja2 !== null) {
        $ganador = "Gana Jugador 2";
      } else {
        // Ninguno tiene pareja o trío, gana quien tiene mayor suma
        if ($suma1 > $suma2) {
          $ganador = "Gana Jugador 1";
        } elseif ($suma2 > $suma1) {
          $ganador = "Gana Jugador 2";
        } else {
          $ganador = "Empate";
        }
      }
      ?>

      <td style="background-color: red;"><img src=<?php echo $arrayImagenes[$dadosJugador1[0]] ?>></td>
      <td style="background-color: red;"><img src=<?php echo $arrayImagenes[$dadosJugador1[1]] ?>></td>
      <td style="background-color: red;"><img src=<?php echo $arrayImagenes[$dadosJugador1[2]] ?>></td>
      <td style="background-color: blue;"><img src=<?php echo $arrayImagenes[$dadosJugador2[0]] ?>></td>
      <td style="background-color: blue;"><img src=<?php echo $arrayImagenes[$dadosJugador2[1]] ?>></td>
      <td style="background-color: blue;"><img src=<?php echo $arrayImagenes[$dadosJugador2[2]] ?>></td>
    </tr>
  </table>

  <p>Resultado: <?php echo $ganador ?></p>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>