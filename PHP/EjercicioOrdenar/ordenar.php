<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ordenar</title>
</head>
<body>
    <?php
    $ordenar = array('Julio', 'Natalia', 'Sofia', 'Marlon', 'Andres', 'Esteban', 'Camilo' 'Sebastian' 'Teresa');
    sort($ordenar);

    $ascendente = count($ordenar);
    for($x = 0; $x < $ascendente; $x++) {
        echo $ordenar[$x];
        echo "<br>";
    }
    ?>
</body>
</html>
