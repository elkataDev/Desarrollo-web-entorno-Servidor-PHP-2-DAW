<?php
/**
 * Variables. Sin formularios.(1) 1 - variables-1.php
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
    Línea.
    Variables. Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>
<body>
  <h1>Línea</h1>
  <?php
 echo "Longitud: ".$longitudLinea = random_int(10,10000);
?>
<div>
 <svg width="1200" height="300">
   <line x1="40" y1="125" x2="<?php echo $longitudLinea; ?>" y2="125" stroke-width="10" stroke="black" />
 </svg>
 </div>
  <p>Actualice la página para mostrar una nueva línea.</p>



  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>
