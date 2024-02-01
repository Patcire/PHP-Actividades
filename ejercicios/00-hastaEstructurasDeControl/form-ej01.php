
<?php

/*
Ejercicio 1: Escribe un programa que muestre tus datos personales por pantalla (nombre, apellidos,
dirección, edad , nº teléfono, dirección). Cada dato tendrá que estar almacenado en una variable.
Utiliza la etiqueta Style para darle estilo.
Nombre: Antonio
Apellidos: ………..
-->
*/

$nombre = "";
$apellidos = "" ;
$edad = 0;
$telefono = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"] ;
    $edad = $_POST["edad"] ;
    $telefono = $_POST["phone"] ;

    echo "<p>$nombre</p>";
    echo "<p>$apellidos</p>";
    echo "<p>$edad</p>";
    echo "<p>$telefono</p>";

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>EJ1</title>
</head>
<body>
<form action="form-ej01.php" method="POST">

    Nombre<input type="text" placeholder="Nombre" name="nombre">
    Apellidos<input type="text" placeholder="Apellidos" name="apellidos">
    Edad<input type="number" placeholder="edad" name="edad">
    Teléfono<input type="number" placeholder="nº telefono" name="phone">
    <input type="submit" value="Enviar">
</form>

</body>
</html>