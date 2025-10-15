<?php
/**
 * matrices-2-05.php
 *
 * @author Antonio Espinola Ramirez
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Busca emoticono.

    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Busca emoticono</h1>

  <p>Actualice la página para mostrar un nuevo grupo de emoticonos.</p>

<?php
// Generar entre 10 y 20 emoticonos (valores Unicode del 128512 al 128580)
$cantidad = rand(10, 20);
$emoticonos = [];

for ($i = 0; $i < $cantidad; $i++) {
    $emoticonos[] = rand(128512, 128580);
}

// Mostrar el grupo de emoticonos
echo "<h2>Grupo de {$cantidad} emoticonos</h2>";
foreach ($emoticonos as $codigo) {
    echo "&#{$codigo}; ";
}

// Elegir un emoticono al azar (del mismo rango) para buscar
$emoticonoBuscado = rand(128512, 128580);

echo "<h2>Emoticono a buscar</h2>";
echo "&#{$emoticonoBuscado}; <br><br>";

// Comprobar si está en el grupo usando in_array()
if (in_array($emoticonoBuscado, $emoticonos)) {
    echo "<p>El emoticono está en el grupo.</p>";
} else {
    echo "<p>El emoticono no está en el grupo.</p>";
}
?>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>