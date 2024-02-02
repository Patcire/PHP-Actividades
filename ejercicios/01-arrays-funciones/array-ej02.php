<?php

/*
 * : Añade valores (Elemento-1,Elemento-2,etc) a un array mientras su longitud sea
    menor de 120 y mostrarlo por pantalla
 */

    $array = [];

    for ($i=1; $i<=120; $i++){

        $elemento = $i;
        array_push($array, "Elemento - ".$elemento . "\n");

    }

echo implode(" ", $array);