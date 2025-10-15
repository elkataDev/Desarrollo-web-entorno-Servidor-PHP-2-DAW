<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Cambio de bits.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Cambio de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y la detección de cambios de bits consecutivos en la secuencia.</p>

  <?php
  // array binario
  $arrayBinario = [0, 1];

  $num = [];
  $num2 = [];

  for ($i = 0; $i < 10; $i++) {
    $num[$i] = random_int(0, 1);
  }

  for ($i = 0; $i < 9; $i++) {  // Solo hasta el penúltimo bit
    if ($num[$i] == $num[$i + 1]) {
      $num2[$i] = 0;  // Si los bits son iguales, agregar 0 al resultado
    } else {
      $num2[$i] = 1;  // Si los bits son distintos, agregar 1 al resultado
    }
  }

  function mostrarArray($arrayNum)
  {
    foreach ($arrayNum as $num) {
      echo $num . " ";
    }
  }

  ?>
  <p>A <?php echo mostrarArray($num) ?></p>

  <p>B <?php echo mostrarArray($num2) ?></p>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>