<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>val</title>
</head>

<body>
    <?php
    $contraseña = [
        "Julio" => "Hernández",
        "Juan" => "Perez",
        "Natalia" => "Morales",
        "Sofia" => "Mora",
    ];

    if (isset($contraseña[$_GET['usuario']])) {
        if ($contraseña[$_GET['usuario']] == $_GET['contraseña']) {
            echo 'Hola, Bienvenido';
        } else {
            echo 'Verificar Usuario y/o contraseña';
        }
    } else {
        echo 'Usuario incorrecto';
    }
    ?>
</body>

</html>
