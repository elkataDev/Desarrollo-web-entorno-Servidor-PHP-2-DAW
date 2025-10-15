<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Elimina un valor.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un valor</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

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
  // Tirada inicial: entre 1 y 10 dados
  $cantidadDados = random_int(1, 10);
  $tiradaInicial = [];

  for ($i = 0; $i < $cantidadDados; $i++) {
    $tiradaInicial[$i] = random_int(1, 6);
  }

  // Dado suelto a eliminar
  $dadoEliminar = random_int(1, 6);
  ?>

  <h2>Tirada inicial <?php echo $cantidadDados ?> dado(s):</h2>
  <div>
    <?php
    foreach ($tiradaInicial as $dado) {
      echo '<img src="' . $dados[$dado] . '" alt="dado">';
    }
    ?>
  </div>

  <h2>Dado a eliminar:</h2>
  <div>
    <img src="<?php echo $dados[$dadoEliminar]; ?>" alt="dado a eliminar">
  </div>

  <h2>Tirada después de eliminar los dados iguales:</h2>
  <div>
    <?php
    $dadosRestantes = 0;
    foreach ($tiradaInicial as $dado) {
      if ($dado != $dadoEliminar) {
        echo '<img src="' . $dados[$dado] . '" alt="dado">';
        $dadosRestantes++;
      }
    }

    if ($dadosRestantes === 0) {
      echo "<p>Todos los dados fueron eliminados.</p>";
    }
    ?>
  </div>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>