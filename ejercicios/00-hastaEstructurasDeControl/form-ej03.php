<?php
// *  Ejercicio 3: Realiza un conversor de pesetas a euros. La cantidad en euros que se quiere convertir
//    deberá estar almacenada en una variable.
// */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pesetas = $_POST['pesetas'];
    $euros = $pesetas / 166.386;

    echo "<p>$pesetas pesetas son aproximadamente $euros euros.</p>";
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form3</title>
</head>
<body>
    <h2>Conversor</h2>
    <form method="post" action="">

        Pesetas<input type="text" name="pesetas" required>


        <input type="submit" value="calcular">
    </form>

</body>
</html>
