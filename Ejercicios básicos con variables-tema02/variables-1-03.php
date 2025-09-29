<?php

/**
 * Variables. Sin formularios.(1) 3 - variables-1-03.php
 *
 * @author Antonio Espinola Ramirez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<style>
  .recuadro-imagen {
    border: 2px solid #666;
    padding: 8px 12px;
    display: inline-block;
    background-color: #f9f9f9;
    font-size: 18px;
    font-weight: bold;
  }
</style>

<head>
  <meta charset="utf-8">
  <title>
    Tirada de dados.
    Variables. Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios-basicos.css" title="Color">
</head>
<?php
//Array de las imagenes del dado
$arrayDados = [null, "img/1.svg", "img/2.svg", "img/3.svg", "img/4.svg", "img/5.svg", "img/6.svg"];

//Obtengo el valor de los dados y la posicion en el array
$dadoAleatorio1 = random_int(1, 6);
$dadoAleatorio2 = random_int(1, 6);

//Resultado de los dados
$resultadoSuma = $dadoAleatorio1 + $dadoAleatorio2;
?>

<body>
  <h1>Tirada de dados</h1>
  <p>Actualice la página para mostrar una nueva tirada.</p>
  <div>
    <img src=<?php echo $arrayDados[$dadoAleatorio1]; ?>>
    <img src=<?php echo $arrayDados[$dadoAleatorio2]; ?>>
  </div>
  <div>
    <p>Total: <span class="recuadro-imagen"><?php echo $resultadoSuma ?></span></p>
  </div>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>