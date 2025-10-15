<?php
/**
 * matrices-2-04.php
 *
 * @author Antonio Espinola Ramirez
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina valores repetidos.

    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Elimina valores repetidos</h1>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>

<?php
// Generar entre 5 y 15 bolas numeradas del 1 al 10
$cantidad = rand(5, 15);
$bolas = [];

for ($i = 0; $i < $cantidad; $i++) {
    $bolas[] = rand(1, 10);
}

// Muestro las bolas
function mostrarBolas($array) {
    foreach ($array as $bola) {
        // El rango Unicode 10102 a 10111 corresponde a los números del 1 al 10
        $codigoUnicode = 10101 + $bola;
        echo "&#{$codigoUnicode}; ";
    }
}

// Mostrar grupo original
echo "<h2>Grupo original</h2>";
mostrarBolas($bolas);

// Eliminar valores repetidos
// array_unique no permite valores repetidos y devuelve un array
$bolasSinRepetir = array_unique($bolas);

// Mostrar grupo sin valores repetidos
echo "<h2>Grupo sin valores repetidos</h2>";
mostrarBolas($bolasSinRepetir);
?>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>