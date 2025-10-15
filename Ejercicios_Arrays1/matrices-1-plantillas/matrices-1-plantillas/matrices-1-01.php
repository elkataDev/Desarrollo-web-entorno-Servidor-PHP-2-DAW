<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Dado.
    Matrices (1). Sin formularios.
    Antonio Espínola Ramírez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <?php
  //Matriz de imagenes y de valor del dado
 $dados = [
    1 => ["img" => "img/1.svg", "valor" => "uno"],
    2 => ["img" => "img/2.svg", "valor" => "dos"],
    3 => ["img" => "img/3.svg", "valor" => "tres"],
    4 => ["img" => "img/4.svg", "valor" => "cuatro"],
    5 => ["img" => "img/5.svg", "valor" => "cinco"],
    6 => ["img" => "img/6.svg", "valor" => "seis"],
];

  //Dado Aleatorio
  $posicionDado = random_int(1, 6);

  $dado = $dados[$posicionDado]["img"];
  $valor = $dados[$posicionDado]["valor"];
  ?>

  <div>
    <img src=<?php echo $dado ?>>
  </div>
  <p>Ha sacado un <?php echo $valor ?></p>
  <footer>
    <p>Antonio Espínola Ramírez</p>
  </footer>
</body>

</html>