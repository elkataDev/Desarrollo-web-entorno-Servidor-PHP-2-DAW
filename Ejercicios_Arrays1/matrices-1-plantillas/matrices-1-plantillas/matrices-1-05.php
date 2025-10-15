<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Hombres y mujeres haciendo deporte.
    Matrices (1). Sin formularios.
    Antonio Espínola Ramírez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Hombres y mujeres haciendo deporte</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php


$emoji = [
"&#127946;",
"&#9977;",
"&#127947;",
"	&#128692;",
];

$posicion = random_int(0,3);

$emojiAleatorio = $emoji[$posicion];
$secuencia = "Secuencia emoji ".$emoji[$posicion];

echo $emojiAleatorio."<br>";
echo $secuencia;
?>

  <footer>
    <p>Antonio Espínola Ramírez</p>
  </footer>
</body>
</html>