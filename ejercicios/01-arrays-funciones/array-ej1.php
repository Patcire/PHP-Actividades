
<!--
Ejercicio 1: Haz un programa con un array de 8 números enteros aleatorios (0,10) y haz lo
siguientes ejercicios sin utilizar funciones predefinidas en PHP
o Haz una función mostrarArray($Array).
o Haz una función que devuelva un array sin el último elemento del array (No utilices
funciones predefinidas). Compara el resultado de tu función y la función
predefinida
o Mostrar su longitud
o Voltea el Array
o Buscar algún elemento que nos introduzcan por URL y mostrar el índice
Pista:index.php?elemento=blanco (Con $_GET sabemos el valor de elemento)

-->
<?php

$myArray = array();
for ($i = 0; $i < 8; $i++) {
    $myArray[] = rand(0, 10);
}

function mostrarArray($array) {
    for ($i = 0; $i<count($array); $i++){
        print $array[$i]." ";
    }

}

mostrarArray($myArray);


function mostrarArraySinUltimo($array) {

    for ($i = 0; $i<count($array)-1; $i++){
        print $array[$i]." ";
    }

}
echo "\n";

mostrarArraySinUltimo($myArray);

echo "\n";

function mostrarLongitud($array){

    $longitud = 0;
    for ($i = 0; $i<count($array); $i++){
        $longitud++ ;
    }

    print $longitud;


}


mostrarLongitud($myArray);

function voltearArray($array){

    $nuevoArray = array();

    for ($i = 8 - 1; $i >= 0; $i--) {
        $nuevoArray[] = $array[$i];
    }
    return $nuevoArray;

}

echo "\n";

$resultadoVolteo =  voltearArray($myArray);
print   implode("", $resultadoVolteo);




?>









