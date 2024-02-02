<?php


include "Car.php";

if (!empty($_POST['newMarca']) && !empty($_POST['newModel'])) {

    $newCar = new Car($_POST['newMarca'], $_POST['newModel']);

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu aplicación web</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>concesionario</h1>
</header>

<nav>
    <ul>


        <?= $newCar->showCarToUpdate()?>
        <li><a href="principal.php">Principal</a></li>
        <li><a href="insert.php">Insertar coche</a></li>
    </ul>
</nav>

<main>
    <h2>modifique un coche</h2>

    <article>



    </article>

    <form method="post">

        <label>marca <input required type="text" name="newMarca" style="width: 500px"></label>
        <label>modelo: <input required type="text" name="newModel" style="background-color: antiquewhite"></label>

        <button type="submit" name="handleUpdate">RModificar</button>

    </form>


</main>


</body>
</html>
