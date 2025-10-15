<?php
/**
 * matrices-2-01.php
 *
 * @author Antonio Espinola Ramirez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Diccionario multilingüe.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Diccionario multilingüe</h1>

  <p>Actualice la página para mostrar una nueva palabra.</p>

<?php
// Palabras base (en español)
$es = ["perro", "gato", "casa", "sol", "agua", "comida", "libro", "flor", "árbol", "cielo"];

// Traducciones a varios idiomas (mismo orden)
$en = ["dog", "cat", "house", "sun", "water", "food", "book", "flower", "tree", "sky"];
$fr = ["chien", "chat", "maison", "soleil", "eau", "nourriture", "livre", "fleur", "arbre", "ciel"];
$de = ["Hund", "Katze", "Haus", "Sonne", "Wasser", "Essen", "Buch", "Blume", "Baum", "Himmel"];

// Agrupamos en una matriz de idiomas
$idiomas = [
  "Español" => $es,
  "Inglés"  => $en,
  "Francés" => $fr,
  "Alemán"  => $de
];

// ===== LÓGICA =====

// Selecciona un índice al azar (misma posición para todas las matrices)
$indice = rand(0, count($es) - 1);

// Selecciona un idioma al azar (distinto del español)
$nombresIdiomas = array_keys($idiomas);
$idiomaDestino = $nombresIdiomas[rand(1, count($nombresIdiomas) - 1)]; // evita el 0 (Español)

// Muestra el resultado
echo "<p><strong>Palabra en español:</strong> {$es[$indice]}</p>";
echo "<p><strong>Traducción al {$idiomaDestino}:</strong> {$idiomas[$idiomaDestino][$indice]}</p>";
?>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>