<?php
include 'func-biblioteca.php';

// Muestra los números primos que hay entre 1 y 1000

for ($i=2; $i<1000; $i++){

    if (esPrimo($i)) print ($i . "\n");

}