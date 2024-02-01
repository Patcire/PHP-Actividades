<?php
/*
 ✓ Ejercicio 2: Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999
    respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la
    división y la multiplicación.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];

    echo "Valor de X: $x ";
    echo "Valor de Y: $y ";
    echo "Suma = $x + $y = " . ($x + $y) . "   ";
    echo "Resta = $x - $y = " . ($x - $y) . "   ";
    echo "Multiplicación = $x x $y = " . ($x * $y) . "   ";

}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
<h2>Calculadora PHP</h2>
<form method="post" action="">

    Valor de X<input type="text" id="x" name="x" required>
    Valor de Y<input type="text" id="y" name="y" required>

    <input type="submit" value="calcular">
</form>
</body>
</html>



