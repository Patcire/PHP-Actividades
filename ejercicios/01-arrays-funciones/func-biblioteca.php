<?php

/*
 * esCapicua: Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso en
caso contrario.
2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo y falso en caso
contrario.
3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa como
parámetro.
4. potencia: Dada una base y un exponente devuelve la potencia.
5. digitos: Cuenta el número de dígitos de un número entero.
6. voltea: Le da la vuelta a un número.
7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se empieza contando
por el 0 y de izquierda a derecha.
8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de un número
entero. Si no se encuentra, devuelve -1.
9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).
10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).
11. pegaPorDetras: Añade un dígito a un número por detrás.
12. pegaPorDelante: Añade un dígito a un número por delante.
13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de un número y
devuelve el trozo correspondiente.
14. juntaNumeros: Pega dos números para formar uno.
 *
 *
 */


function esCapicua($numero) {
    return strrev((string)$numero) === (string)$numero;
}

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

function siguientePrimo($numero) {
    $siguientePrimo = $numero + 1;
    while (!esPrimo($siguientePrimo)) {
        $siguientePrimo++;
    }
    return $siguientePrimo;
}

function potencia($base, $exponente) {
    return pow($base, $exponente);
}

function digitos($numero) {
    return strlen((string)$numero);
}

function voltea($numero) {
    return intval(strrev((string)$numero));
}

function digitoN($numero, $n) {
    $numeroStr = (string)$numero;
    if ($n >= 0 && $n < strlen($numeroStr)) {
        return intval($numeroStr[$n]);
    } else {
        return false;
    }
}

function posicionDeDigito($numero, $digito) {
    $posicion = strpos((string)$numero, (string)$digito);
    return $posicion === false ? -1 : $posicion;
}

function quitaPorDetras($numero, $n) {
    return intval(substr((string)$numero, 0, -$n));
}

function quitaPorDelante($numero, $n) {
    return intval(substr((string)$numero, $n));
}

function pegaPorDetras($numero, $digito) {
    return intval((string)$numero . (string)$digito);
}

function pegaPorDelante($numero, $digito) {
    return intval((string)$digito . (string)$numero);
}

function trozoDeNumero($numero, $inicio, $fin) {
    return intval(substr((string)$numero, $inicio, $fin - $inicio + 1));
}

function juntaNumeros($numero1, $numero2) {
    return intval((string)$numero1 . (string)$numero2);
}

