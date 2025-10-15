<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Elimina un animal.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Antonio Espinola Ramirez</h1>

  <p>Actualice la página para mostrar un nuevo grupo de animales.</p>

  <?php
//cantidad de animales
$cantidadAnimales = random_int(20,30);

 // array para guardar animales
  $animales = [];

  // generar animales aleatorios (Unicode 128000 a 128060)
for ($i = 0; $i < $cantidadAnimales; $i++) {
      $codigo = random_int(128000, 128060);
      $animales[] = "&#".$codigo;
  }

  // mostrar animales iniciales
  echo "<h3>$cantidadAnimales animales</h3>";
  foreach ($animales as $animal) {
      echo $animal . " ";
  }

  // elegir un animal al azar de la lista
  $animalEliminar = $animales[array_rand($animales)];
  echo "<h3>Animal a eliminar</h3>";
  echo "<p>$animalEliminar</p>";

  // eliminar todas las coincidencias del animal elegido
  $animalesRestantes = array_filter($animales, function($a) use ($animalEliminar) {
      return $a !== $animalEliminar;
  });

  // mostrar animales restantes
  echo "<h3>Quedan " . count($animalesRestantes) . " animales</h3>";
  foreach ($animalesRestantes as $animal) {
      echo $animal . " ";
  }
  ?>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>