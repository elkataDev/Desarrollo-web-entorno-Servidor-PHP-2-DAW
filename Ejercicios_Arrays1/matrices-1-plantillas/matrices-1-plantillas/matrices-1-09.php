<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    "Y" lógico.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>"Y" lógico</h1>

  <p>Actualice la página para mostrar dos secuencias aleatorias de bits y su conjunción lógica.</p>

  <?php
  // array binario
  $arrayBinario = [0, 1];

  $num = [];
  $num2 = [];
  $conjuncion = [];

  for ($i = 0; $i < 10; $i++) {
    $num[$i] = random_int(0, 1);  // secuencia A
    $num2[$i] = random_int(0, 1); // secuencia B
    $conjuncion[$i] = $num[$i] & $num2[$i]; // "Y" lógico
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
  <p><strong>Conjunción lógica (A & B): </strong><?php mostrarArray($conjuncion); ?></p>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>