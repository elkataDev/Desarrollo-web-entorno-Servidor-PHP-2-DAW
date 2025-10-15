<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Negación.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Negación de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.</p>

  <?php
  // array binario
  $arrayBinario = [0, 1];

  $num = [];
  $num2 = [];

  for ($i = 0; $i < 10; $i++) {
    $num[$i] = random_int(0, 1);

    if ($num[$i] == 0) {
      $num2[$i] = 1;
      continue;
    }
    $num2[$i] = 0;
  }

  function mostrarArray($arrayNum)
  {
    foreach ($arrayNum as $num) {
      echo $num . " ";
    }
  }

  ?>
  <p><?php echo mostrarArray($num) ?></p>

  <p><?php echo mostrarArray($num2) ?></p>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>