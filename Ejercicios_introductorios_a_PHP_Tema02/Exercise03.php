<?php
//Dos maneras de declarar una constante
//define("IVA",21); Funcion
//const IVA = 21;   Palabra reservada

const IVA = 21;
$precio = 100;
$precioSinIVA = $precio + ($precio * IVA /100);

print("El precio del producto sin IVA es $precio\n");
print("El precio del producto con IVA es $precioSinIVA\n");