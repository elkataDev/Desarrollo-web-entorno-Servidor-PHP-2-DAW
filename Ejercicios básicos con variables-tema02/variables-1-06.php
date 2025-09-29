<?php

/**
 * Variables. Sin formularios.(1) 11 - variables-1-06.php
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
    Cuatro círculos.
    Variables. Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>

<style>
.contenedor {
    display: flex;
    flex-wrap: wrap;
    gap: 0; /* Sin espacio entre los SVG para que estén pegados */
}

.contenedor svg {
    display: block; /* Elimina el espacio en blanco debajo del SVG */
}
</style>

<body>
  <h1>Cuatro círculos</h1>

  <?php
  $tamanoRandom = random_int(20, 50);
   $diametro = $tamanoRandom * 2; // Calcular el diámetro
  echo "Estos circulos tienen " . $tamanoRandom . " de radio. Actualice la página para mostrar cuatros nuevos circulos.";
  ?>
    <div class="contenedor">
    <svg height="<?php echo $diametro ?>" width="<?php echo $diametro ?>">
      <circle r="<?php echo $tamanoRandom ?>" cx="<?php echo $tamanoRandom ?>" cy="<?php echo $tamanoRandom ?>" fill="red" />
    </svg>
    <svg height="<?php echo $diametro ?>" width="<?php echo $diametro ?>">
      <circle r="<?php echo $tamanoRandom ?>" cx="<?php echo $tamanoRandom ?>" cy="<?php echo $tamanoRandom ?>" fill="yellow" />
    </svg>
    <svg height="<?php echo $diametro ?>" width="<?php echo $diametro ?>">
      <circle r="<?php echo $tamanoRandom ?>" cx="<?php echo $tamanoRandom ?>" cy="<?php echo $tamanoRandom ?>" fill="green" />
    </svg>
    <svg height="<?php echo $diametro ?>" width="<?php echo $diametro ?>">
      <circle r="<?php echo $tamanoRandom ?>" cx="<?php echo $tamanoRandom ?>" cy="<?php echo $tamanoRandom ?>" fill="blue" />
    </svg>
  </div>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>

</html>