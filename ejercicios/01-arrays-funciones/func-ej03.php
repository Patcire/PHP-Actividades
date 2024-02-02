<?php
include 'func-biblioteca.php';
// Escribe un programa que pase de binario a decimal.

    $binario = "1011";
    $decimal = 0;
    $longitud = digitos($binario);

    for ($i = 0; $i < $longitud; $i++) {
        $digito = digitoN($binario, $longitud - 1 - $i);
        $decimal += $digito * potencia(2, $i);
    }

    print $decimal;


