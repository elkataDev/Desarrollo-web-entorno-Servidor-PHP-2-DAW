<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Animales.
    Matrices (1). Sin formularios.
    Antonio Espínola Ramírez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

  <?php
  //Array animales
  $animales = [
    null,
    "img/animales/ballena.svg",
    "img/animales/caballito-mar.svg",
    "img/animales/camello.svg",
    "img/animales/cebra.svg",
    "img/animales/elefante.svg",
    "img/animales/hipopotamo.svg",
    "img/animales/jirafa.svg",
    "img/animales/leon.svg",
    "img/animales/leopardo.svg",
    "img/animales/medusa.svg",
    "img/animales/mono.svg",
    "img/animales/oso-blanco.svg",
    "img/animales/oso.svg",
    "img/animales/pajaro.svg",
    "img/animales/pinguino.svg",
    "img/animales/rinoceronte.svg",
    "img/animales/serpiente.svg",
    "img/animales/tigre.svg",
    "img/animales/tortuga-marina.svg",
    "img/animales/tortuga.svg"
  ];

  //animal aleatorio
  $animalAleatorio = $animales[random_int(1, 20)];
  ?>

  <div>
    <img src=<?php echo $animalAleatorio ?>>
  </div>

  <footer>
    <p>Antonio Espínola Ramírez</p>
  </footer>
</body>

</html>