<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    El bit más común.
    Matrices (1). Sin formularios.
    Escribe aquí tu nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>El bit más común</h1>

  <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el bit más común en esa posición.</p>

  <?php
  // array binario
  $arrayBinario = [0, 1];

  $num = [];
  $num2 = [];
  $num3 = [];
  $numComun = [];

  // Generar las secuencias aleatorias y calcular el más común
  for ($i = 0; $i < 10; $i++) {
    $num[$i] = random_int(0, 1);
    $num2[$i] = random_int(0, 1);
    $num3[$i] = random_int(0, 1);

    // Contar cuántos 1 y 0 hay en esa posición
    $suma = $num[$i] + $num2[$i] + $num3[$i];

    // Si 1 aparece 2 o más veces, es el más común
    if ($suma >= 2) {
      $numComun[$i] = 1;
    } else {
      $numComun[$i] = 0;
    }
  }

  function mostrarArray($arrayNum)
  {
    foreach ($arrayNum as $num) {
      echo $num . " ";
    }
  }

  ?>

  <p><strong>Secuencia A: </strong><?php mostrarArray($num); ?></p>
  <p><strong>Secuencia B: </strong><?php mostrarArray($num2); ?></p>
  <p><strong>Secuencia C: </strong><?php mostrarArray($num3); ?></p>
  <p><strong>Bit más común por posición: </strong><?php mostrarArray($numComun); ?></p>

  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>

</html>