<?php

/*
 ✓ Ejercicio 3: Crea un array con diferentes valores tipo string, integer, booleano, imprime un
    mensaje por pantalla dependiendo el tipo de variable.
    Pista: Recorre el array con foreach y utiliza funciones is_int, is_float, etc
 */

$array = array("pepee", 123, true, 6.2, 37, false, "lejos");

foreach ($array as $valor) {

    if (is_string($valor)) {
        echo "$valor - cadena\n";
    }
    elseif (is_int($valor)) {
        echo "$valor - entero\n";
    }
    elseif (is_bool($valor)) {
        echo "$valor - booleano\n";
    }
    elseif (is_float($valor)) {
        echo "$valor - decimal\n";
    }
}
