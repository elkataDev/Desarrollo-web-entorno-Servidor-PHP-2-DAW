<?php

/**
 * Variables. Sin formularios.(1) 4 - variables-1-04.php
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
    La carta más alta.
    Variables. Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

  <?php

  //Array de imagenes de las cartas
  $arrayCartas = [null, "img/c1.svg", "img/c2.svg", "img/c3.svg", "img/c4.svg", "img/c5.svg", "img/c6.svg", "img/c7.svg", "img/c8.svg", "img/c9.svg", "img/c10.svg"];

  //Obtengo las cartas aleatorias 
  $cartaRandom1 = random_int(1, 10);
  $cartaRandom2 = random_int(1, 10);
  $cartaRandom3 = random_int(1, 10);

  //Obtengo la carta mas alta
  $cartaMasAlta =  max($cartaRandom1, $cartaRandom2, $cartaRandom3);


  ?>
  <!--Muestro las cartas de forma aleatoria-->
  <div>
    <img src=<?php echo $arrayCartas[$cartaRandom1]; ?>>
    <img src=<?php echo $arrayCartas[$cartaRandom2]; ?>>
    <img src=<?php echo $arrayCartas[$cartaRandom3]; ?>>
  </div>
  <p>La clase mas alta es: <?php echo $cartaMasAlta; ?></p>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>