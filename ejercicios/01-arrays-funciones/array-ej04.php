<?php

/*
    Crea un array asociativo donde cada elemento es un array con el contenido de
    la tabla. Haz una tabla HTML con los datos del array.
    Accion Aventura Deporte
    GTA 5 Assasin Creed FIFA
    Call Of duty Tomb Raider PES
    PUGB Last of us Moto G
    Pista: $juego[‘Accion] =[ ‘GTA 5’, …… ] o
     $juego= array ( acción=> array (‘GTA 5’,……) , …..);
    Para imprimir la cabecera de la página utiliza función array_keys y el resto de la tabla con
    dos foreach anidados
 */

$juegos = array(
    'Accion' => array('GTA 5', 'Call Of Duty', 'PUBG'),
    'Aventura' => array('Assassin Creed', 'Tomb Raider', 'Last of Us'),
    'Deporte' => array('FIFA', 'PES', 'Moto G')
);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Tabla de Juegos</title>

</head>
<body>
    <h2>Tabla de Juegos</h2>
    <table>
    <tr>
    <th>Acción</th>
    <th>Aventura</th>
    <th>Deporte</th>
    </tr>
    </table>
</body>
</html>";

<?php

    foreach ($juegos as $categoria => $juegoCategoria) {
        echo "<tr>";
        foreach ($juegoCategoria as $juego) {
            echo "<td>$juego</td>";
        }
        echo "</tr>";
}
?>

</body>
</html>";