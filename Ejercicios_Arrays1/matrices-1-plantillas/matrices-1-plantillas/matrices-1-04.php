<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Gestos de manos.
    Matrices (1). Sin formularios.
    Antonio Espínola Ramírez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</header>

<body>
  <h1>Gestos de manos</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php

$emoji = [
"&#128072;",
"&#128073;",
"&#128070;",
"&#128071;"
];

$colores = [
"&#127995;",
"&#127996;",
"&#127997;",
"&#127998;",
"&#127999;"
];

$emojiAleatorio = array_rand($emoji);
$colorAleatorio = array_rand($colores);

echo $emoji[$emojiAleatorio].$colores[$colorAleatorio];
?>


  <footer>
    <p>Antonio Espínola Ramírez</p>
  </footer>
</body>
</html>