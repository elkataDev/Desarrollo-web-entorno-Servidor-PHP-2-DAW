<?php
/**
 *  matrices-2-07.php
 *
 * @author Antonio Espinola Ramirez
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Reparto de cartas.

    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Reparte cartas</h1>

<?php
/**
 * matrices-2-07.php
 *
 * @author Antonio Espinola Ramirez
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Reparto de cartas.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
  <style>
    body { font-family: Arial, sans-serif; font-size: 1.1em; }
    img { width: 70px; margin: 5px; vertical-align: middle; }
    h2 { margin-top: 20px; }
  </style>
</head>

<body>
  <h1>Reparte cartas</h1>

<?php
// Array con las cartas de corazones disponibles (1 al 10)
$cartas = [
  "c1.svg", "c2.svg", "c3.svg", "c4.svg", "c5.svg",
  "c6.svg", "c7.svg", "c8.svg", "c9.svg", "c10.svg"
];

// Elegir un número par de cartas entre 4 y 12
$numeroCartas = rand(2, 6) * 2; // 2x2=4 ... 6x2=12

// Barajar el mazo
shuffle($cartas);

// Tomar las primeras cartas del mazo
$reparto = array_slice($cartas, 0, $numeroCartas);

// Mostrar las cartas seleccionadas
echo "<h2>Las $numeroCartas cartas a repartir</h2>";
foreach ($reparto as $carta) {
  echo "<img src='img/cartas/$carta' alt='$carta'>";
}

// Barajar las cartas seleccionadas antes de repartirlas
shuffle($reparto);

// Crear arrays para los dos jugadores
$jugadorA = [];
$jugadorB = [];

// Repartir alternando cartas
for ($i = 0; $i < count($reparto); $i++) {
  if ($i % 2 == 0) {
    $jugadorA[] = $reparto[$i];
  } else {
    $jugadorB[] = $reparto[$i];
  }
}

// Mostrar cartas del jugador A
echo "<h2>Las " . count($jugadorA) . " cartas del jugador A</h2>";
foreach ($jugadorA as $carta) {
  echo "<img src='img/cartas/$carta' alt='$carta'>";
}

// Mostrar cartas del jugador B
echo "<h2>Las " . count($jugadorB) . " cartas del jugador B</h2>";
foreach ($jugadorB as $carta) {
  echo "<img src='img/cartas/$carta' alt='$carta'>";
}
?>


  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>
