<?php
include 'func-biblioteca.php';

// Escribe un programa que pase de decimal a binario

    $decimal = 11;
    $binario = "";

    while ($decimal > 0) {
        $digito = $decimal % 2;
        $binario = pegaPorDetras($binario, $digito);
        $decimal = intval($decimal / 2);
    }

    if ($binario === "") {
        $binario = "0";
    }

    print strrev($binario);