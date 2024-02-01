<?php
/*
    Realizar el área y la longitud de la circunferencia utilizando la variable $radio=12.
    Utiliza la constante pi.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $area = $_POST['radio'] * pi();


    echo "<p>area = $area</p>";
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form4</title>
</head>
<body>

    <h2>area</h2>
    <form method="post" action="">

        radio<input type="text" name="radio" required>


        <input type="submit" value="area">
    </form>

</body>
</html>
