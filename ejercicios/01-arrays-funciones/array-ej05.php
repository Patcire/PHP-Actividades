<?php
/*
 * Ejercicio 5: Escribe un programa que pida 10 números por teclado y los almacene en un
array. Muestra los valores máximo y mínimo

 */

    $array = [];
    for ($i=0; $i<10; $i++) {
        print "Ingrese un valor: ";
        array_push($array, fgets(STDIN));
    }

    $min= 9999999999999999999;
    $max=0;

    foreach ($array as $number){
        if ($number > $max){
            $max = $number;
        }
        if ($number < $min){
            $min = $number;
        }

    }

    print "max = " . $max . "min = " . $min;


