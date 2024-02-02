<?php

include 'func-biblioteca.php';
//  Muestra los números capicúa que hay entre 1 y 99999.

    for ($i=2; $i<99999; $i++){

        if (esCapicua($i)) print ($i . "\n");

    }