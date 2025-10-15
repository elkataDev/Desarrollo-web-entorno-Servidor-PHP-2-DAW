<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Nombres de animales.
    Matrices (1). Sin formularios.
    Antonio Espínola Ramírez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
  //Matriz animales
$animales = [
  1  => ["img" => "img/animales/ballena.svg", "valor" => "ballena"],
  2  => ["img" => "img/animales/caballito-mar.svg", "valor" => "caballito de mar"],
  3  => ["img" => "img/animales/camello.svg", "valor" => "camello"],
  4  => ["img" => "img/animales/cebra.svg", "valor" => "cebra"],
  5  => ["img" => "img/animales/elefante.svg", "valor" => "elefante"],
  6  => ["img" => "img/animales/hipopotamo.svg", "valor" => "hipopótamo"],
  7  => ["img" => "img/animales/jirafa.svg", "valor" => "jirafa"],
  8  => ["img" => "img/animales/leon.svg", "valor" => "león"],
  9  => ["img" => "img/animales/leopardo.svg", "valor" => "leopardo"],
  10 => ["img" => "img/animales/medusa.svg", "valor" => "medusa"],
  11 => ["img" => "img/animales/mono.svg", "valor" => "mono"],
  12 => ["img" => "img/animales/oso-blanco.svg", "valor" => "oso blanco"],
  13 => ["img" => "img/animales/oso.svg", "valor" => "oso"],
  14 => ["img" => "img/animales/pajaro.svg", "valor" => "pájaro"],
  15 => ["img" => "img/animales/pinguino.svg", "valor" => "pingüino"],
  16 => ["img" => "img/animales/rinoceronte.svg", "valor" => "rinoceronte"],
  17 => ["img" => "img/animales/serpiente.svg", "valor" => "serpiente"],
  18 => ["img" => "img/animales/tigre.svg", "valor" => "tigre"],
  19 => ["img" => "img/animales/tortuga-marina.svg", "valor" => "tortuga marina"],
  20 => ["img" => "img/animales/tortuga.svg", "valor" => "tortuga"]
];

//Obtengo animal aleatorio
$posicionAleatoria = random_int(1,20); 
$animalAleatorio = $animales[$posicionAleatoria]["img"];
$valorAnimal = $animales[$posicionAleatoria]["valor"];
?>
<p><?php echo $valorAnimal?></p>
<div>
  <img src=<?php echo $animalAleatorio?>>
</div>

  <footer>
    <p>Antonio Espínola Ramírez</p>
  </footer>
</body>
</html>