<?php

/*
     * Ejercicio 6: Crea un mini-diccionario español-inglés que contenga, al menos, 10 palabras
    (con su traducción). Utiliza un array asociativo para almacenar las parejas de palabras. El
    programa pedirá una palabra en español y dará la correspondiente traducción en inglés.
 */

    $diccionario = array(
        "casa" => "house",
        "perro" => "dog",
        "gato" => "cat",
        "sol" => "sun",
        "luna" => "moon",
        "libro" => "book",
        "ordenador" => "computer",
        "agua" => "water",
        "comida" => "food",
        "amigo" => "friend"
);

    echo "Ingrese una palabra: ";
    $palabra = trim(fgets(STDIN));

    if (array_key_exists($palabra, $diccionario)) {
        $traduccion = $diccionario[$palabra];
        print "'$palabra' en inglés es: $traduccion\n";
    } else {
        print "La palabra introducida no existe en el diccionario.\n";
    }

