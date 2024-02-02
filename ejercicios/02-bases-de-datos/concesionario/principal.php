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
        <li><a href="principal.php">Principal</a></li>
        <li><a href="insert.php">Insertar coche</a></li>
    </ul>
</nav>

<main>
    <h2>inserte un coche</h2>


    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>Toyota</td>
            <td>Corolla</td>
            <td>
                <form method="post">
                <button type="submit" name="update">editar</button>
                </form>
                <form method="post">

                    <button type="submit" name="delete">Borrar</button>

                </form>

                <?php
                if (isset($_POST['delete'])){
                    $car = new  Car($_POST['marca'], $_POST['model']);
                    $car->delete();
                }

                if (isset($_POST['update'])){
                    $car = new  Car($_POST['marca'], $_POST['model']);
                    header("Location: edit.php");
                }

                ?>

            </td>
        </tr>

    </table>



</main>


</body>
</html>