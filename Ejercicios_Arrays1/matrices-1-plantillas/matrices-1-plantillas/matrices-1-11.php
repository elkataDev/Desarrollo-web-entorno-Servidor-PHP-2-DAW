<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Partida de dados.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>

  <?php
  //Array de dados
  $dados = [
    null,
    "img/1.svg",
    "img/2.svg",
    "img/3.svg",
    "img/4.svg",
    "img/5.svg",
    "img/6.svg"
  ];
  // Jugador 1 - dos tiradas
  $posicion1 = random_int(1, 6);
  $posicion2 = random_int(1, 6);

  // Jugador 2 - dos tiradas
  $posicion3 = random_int(1, 6);
  $posicion4 = random_int(1, 6);

  // Mostrar imágenes
  $dadoAleatorio1 = $dados[$posicion1];
  $dadoAleatorio2 = $dados[$posicion2];
  $dadoAleatorio3 = $dados[$posicion3];
  $dadoAleatorio4 = $dados[$posicion4];

  // Inicializar contadores de puntos
  $puntosJugador1 = 0;
  $puntosJugador2 = 0;

  // Comparar primer dado
  if ($posicion1 > $posicion3) {
    $puntosJugador1++;
  } elseif ($posicion3 > $posicion1) {
    $puntosJugador2++;
  }

  // Comparar segundo dado
  if ($posicion2 > $posicion4) {
    $puntosJugador1++;
  } elseif ($posicion4 > $posicion2) {
    $puntosJugador2++;
  }

  // Determinar el resultado
  if ($puntosJugador1 > $puntosJugador2) {
    $resultado = "¡Gana el Jugador 1!";
  } elseif ($puntosJugador2 > $puntosJugador1) {
    $resultado = "¡Gana el Jugador 2!";
  } else {
    $resultado = "¡Empate!";
  }
  ?>

  <p><strong>Jugador 1:</strong></p>
  <div>
    <img src="<?php echo $dadoAleatorio1 ?>" alt="dado"><img src="<?php echo $dadoAleatorio2 ?>" alt="dado">
  </div>
  <p><strong>Jugador 2:</strong></p>
  <div>
    <img src="<?php echo $dadoAleatorio3 ?>" alt="dado"><img src="<?php echo $dadoAleatorio4 ?>" alt="dado">
  </div>
  <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>