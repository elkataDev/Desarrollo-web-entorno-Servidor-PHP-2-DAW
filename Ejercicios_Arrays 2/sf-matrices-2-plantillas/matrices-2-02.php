<?php
/**
 * matrices-2-02.php
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
    Tirada multilingüe.

    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
<?php
// Array de dado
$arrayDados = ["img/dados-poker/1.svg","img/dados-poker/2.svg","img/dados-poker/3.svg","img/dados-poker/4.svg","img/dados-poker/5.svg","img/dados-poker/6.svg"];
$indiceAleatorio = rand(0,count($arrayDados)-1); // Posicion aleatoria

//Idiomas
$es = ["uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez"]; //Español
 
$en = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];  //ingles
 
$fr = ["un", "deux", "trois", "quatre", "cinq", "six", "sept", "huit", "neuf", "dix"];  //Frances

$de = ["eins", "zwei", "drei", "vier", "fünf", "sechs", "sieben", "acht", "neun", "zehn"]; //Aleman

$it = ["uno", "due", "tre", "quattro", "cinque", "sei", "sette", "otto", "nove", "dieci"]; //italiano

// Agrupamos en una matriz de idiomas
$idiomas = [
  "Español" => $es,
  "Inglés"  => $en,
  "Francés" => $fr,
  "Alemán"  => $de,
  "Italiano" => $it
];

//Idioma Aleatorio
$listaIdiomas = array_keys($idiomas);
$idiomaElegido = $listaIdiomas[rand(0, count($listaIdiomas) - 1)];

// Muestra el resultado
echo "<img src=\"{$arrayDados[$indiceAleatorio]}\" alt=\"Dado\" width=\"100\">";
echo "<p>Has obtenido un <strong>{$idiomas[$idiomaElegido][$indiceAleatorio]}</strong> en <em>$idiomaElegido</em>.</p>";

?>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>
