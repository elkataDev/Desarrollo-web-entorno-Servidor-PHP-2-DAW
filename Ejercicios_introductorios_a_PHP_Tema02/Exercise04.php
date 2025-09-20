<?php

//Variable
$edad = 85;

if ($edad < 18) {
    print("Eres menor de edad");
} else if ($edad >= 18 && $edad <= 64) {
    print("Eres un adulto");
}else{
    print("Perteneces a la tercera edad");
}
