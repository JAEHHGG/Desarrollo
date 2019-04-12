<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ordenar</title>
</head>
<body>
    <?php
    $ordenar = array('Julio', 'Natalia', 'Sofia');
    sort($ordenar);

    $ascendente = count($ordenar);
    for($x = 0; $x < $ascendente; $x++) {
        echo $ordenar[$x];
        echo "<br>";
    }
    ?>
</body>
</html>
