
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada de dados.
    Matrices (1). Sin formularios.
    Antonio Espinola Ramirez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
//Array de dados
$dados = [
  null,"img/1.svg","img/2.svg","img/3.svg","img/4.svg","img/5.svg","img/6.svg"
];

$posicion1 = random_int(1,6);
$posicion2 = random_int(1,6);
$posicion3 = random_int(1,6);

$dadoAleatorio1 = $dados[$posicion1];
$dadoAleatorio2 = $dados[$posicion2];
$dadoAleatorio3 = $dados[$posicion3];

?>
<p>Tirada de 3 dados</p>
<div>
  <img src="<?php echo $dadoAleatorio1?>" alt="dado"><img src="<?php echo $dadoAleatorio2?>" alt="dado"><img src="<?php echo $dadoAleatorio3?>" alt="dado">
</div>
<p>Resultado</p>
<p>Los valores obtenidos son: <?php echo $posicion1." ".$posicion2." ".$posicion3?></p>
  <footer>
    <p>Antonio Espinola Ramirez</p>
  </footer>
</body>
</html>
