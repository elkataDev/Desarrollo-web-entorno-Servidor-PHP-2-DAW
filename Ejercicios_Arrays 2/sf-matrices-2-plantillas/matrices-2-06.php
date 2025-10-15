<?php
/**
 *  matrices-2-06.php
 *
 * @author Antonio Espinola Ramirez
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuenta corazones.

    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios2.css" title="Color">
</head>

<body>
  <h1>Cuenta corazones</h1>

  <p>Actualice la página para mostrar un nuevo grupo de corazones.</p>

<?php
// Generar entre 7 y 20 corazones (valores Unicode del 128147 al 128152)
$cantidad = rand(7, 20);
$corazones = [];

// Rellenar el arreglo con corazones aleatorios
for ($i = 0; $i < $cantidad; $i++) {
    $corazones[] = rand(128147, 128152);
}

// Mostrar el grupo original
echo "<h2>$cantidad corazones</h2>";
foreach ($corazones as $codigo) {
    echo "<span class='emoji'>&#{$codigo};</span>";
}

// Contar cuántas veces aparece cada corazón
$frecuencias = array_count_values($corazones);

// Mostrar el conteo gracias al array_count_values
echo "<h2>Conteo</h2>";
foreach ($frecuencias as $codigo => $veces) {
    echo "<div class='conteo'><span class='emoji'>&#{$codigo};</span> $veces</div>";
}
?>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>
