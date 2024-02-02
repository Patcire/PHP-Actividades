<?php

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

    $palabrasRandom = array_rand($diccionario, 5);
    $respuestas_validas = 0;
    $respuestas_erroneas = 0;
    
    foreach ($palabrasRandom as $palabra) {

        print "Traduce la palabra '$palabra' al inglés: ";
        $traduccionUsuario = strtolower(trim(fgets(STDIN)));

        if ($traduccionUsuario === $diccionario[$palabra]) {
            print "¡Respuesta correcta!\n";
            $respuestas_validas++;
        }
        else {
            print "Respuesta incorrecta. realmente es '{$diccionario[$palabra]}'\n";
            $respuestas_erroneas++;
        }
    }

    print "Respuestas válidas: $respuestas_validas\n";
    print "Respuestas erróneas: $respuestas_erroneas\n";