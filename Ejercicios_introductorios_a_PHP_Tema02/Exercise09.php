<?php

//variable
$contador = 1;

do {
    if ($contador % 2 == 0) {
        print($contador . "\n");
    }
    $contador++;
} while ($contador <= 20);
