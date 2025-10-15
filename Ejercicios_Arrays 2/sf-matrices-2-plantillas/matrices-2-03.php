<?php
/**
 * matrices-2-03.php
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
<?php
// Traducciones a varios idiomas (mismo orden)
$es = ["perro", "gato", "casa", "sol", "agua", "comida", "libro", "flor", "árbol", "cielo"];
$en = ["dog", "cat", "house", "sun", "water", "food", "book", "flower", "tree", "sky"];
$fr = ["chien", "chat", "maison", "soleil", "eau", "nourriture", "livre", "fleur", "arbre", "ciel"];
$de = ["Hund", "Katze", "Haus", "Sonne", "Wasser", "Essen", "Buch", "Blume", "Baum", "Himmel"];

$palabras = [
  "Español" => $es,
  "Inglés"  => $en,
  "Francés" => $fr,
  "Alemán"  => $de
];

// ===== MATRIZ DE NOMBRES DE IDIOMAS (traducidos) =====
$nombresIdiomas = [
  "Español" => ["Español", "Inglés", "Francés", "Alemán"],
  "Inglés"  => ["Spanish", "English", "French", "German"],
  "Francés" => ["Espagnol", "Anglais", "Français", "Allemand"],
  "Alemán"  => ["Spanisch", "Englisch", "Französisch", "Deutsch"]
];

// ===== MATRIZ DE ETIQUETAS DE INTERFAZ =====
$interfaz = [
  "Español" => ["Palabra", "Traducción al", "Idioma"],
  "Inglés"  => ["Word", "Translation to", "Language"],
  "Francés" => ["Mot", "Traduction en", "Langue"],
  "Alemán"  => ["Wort", "Übersetzung ins", "Sprache"]
];

// ===== LÓGICA =====
$idiomasDisponibles = array_keys($palabras);

// Idioma de la interfaz (aleatorio)
$idiomaInterfaz = $idiomasDisponibles[rand(0, count($idiomasDisponibles) - 1)];

// Idioma de destino (distinto del de la interfaz)
do {
  $idiomaDestino = $idiomasDisponibles[rand(0, count($idiomasDisponibles) - 1)];
} while ($idiomaDestino == $idiomaInterfaz);

// Palabra aleatoria
$indice = rand(0, count($es) - 1);

// ===== MOSTRAR RESULTADO =====
echo "<h1>{$interfaz[$idiomaInterfaz][0]} multilingüe</h1>";

echo "<p><strong>{$interfaz[$idiomaInterfaz][0]}:</strong> {$palabras[$idiomaInterfaz][$indice]}</p>";
echo "<p><strong>{$interfaz[$idiomaInterfaz][1]} {$nombresIdiomas[$idiomaInterfaz][array_search($idiomaDestino, $idiomasDisponibles)]}:</strong> {$palabras[$idiomaDestino][$indice]}</p>";

echo "<hr>";
echo "<p>{$interfaz[$idiomaInterfaz][2]}: <strong>$idiomaInterfaz</strong></p>";
?>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>
