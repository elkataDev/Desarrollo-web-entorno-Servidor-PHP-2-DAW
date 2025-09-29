<?php
/**
 * Variables. Sin formularios.(1) 13 - variables-1-08.php
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
    Tres círculos.
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
    gap: 0; /* Sin espacio entre los SVG para que esten pegados */
}

.contenedor svg {
    display: block; /* Elimina el espacio en blanco debajo del SVG */
}
</style>

<body>
  <h1>Círculos de color</h1>

  <p>Actualice la página para mostrar tres nuevos círculos.</p>

<?php
  // Generar tamanio aletorios
  $circulo1 = random_int(25, 75);
  $circulo2 = random_int(25, 75);
  $circulo3 = random_int(25, 75);
  
  // Calcular el diámetro de cada círculo para el SVG (radio * 2)
  $diametro1 = $circulo1 * 2;
  $diametro2 = $circulo2 * 2;
  $diametro3 = $circulo3 * 2;
?>

<div class="contenedor">
    <svg height="<?php echo $diametro1 ?>" width="<?php echo $diametro1 ?>">
      <circle r="<?php echo $circulo1 ?>" cx="<?php echo $circulo1 ?>" cy="<?php echo $circulo1 ?>" fill="red" />
    </svg>
    <svg height="<?php echo $diametro2 ?>" width="<?php echo $diametro2 ?>">
      <circle r="<?php echo $circulo2 ?>" cx="<?php echo $circulo2 ?>" cy="<?php echo $circulo2 ?>" fill="yellow" />
    </svg>
    <svg height="<?php echo $diametro3 ?>" width="<?php echo $diametro3 ?>">
      <circle r="<?php echo $circulo3 ?>" cx="<?php echo $circulo3 ?>" cy="<?php echo $circulo3 ?>" fill="green" />
    </svg>
</div>

  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>