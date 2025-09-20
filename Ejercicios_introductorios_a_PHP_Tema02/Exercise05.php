<?php

//variables
$dia = random_int(1, 7); //numero aleatorio entre 1 y 7 incluidos

//switch
switch ($dia) {
    case 1:
        print("Lunes");
        break;
    case 2:
        print("Martes");
        break;
    case 3:
        print("Miercoles");
        break;
    case 4:
        print("Jueves");
        break;
    case 5:
        print("Viernes");
        break;
    case 6:
        print("Sabado");
        break;
    case 7:
        print("Domingo");
        break;
    default:
        print("Error dato incorrecto");
        break;
}
