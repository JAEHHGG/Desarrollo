<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>validar</title>
</head>
<body>
    <?php
    $pass = [
        "Julio" => "Hernández",
        "Juan" => "Perez",
        "Natalia" => "Morales",
        "Sofia" => "Mora",
    ];

    if (isset($pass[$_POST['usuario']])) {
        if ($pass[$_POST['usuario']] == $_POST['pass']){
            echo 'Hola, Bienvenido';
        } else {
            echo 'Verificar Usuario y/o contraseña'
        }
    } else {
        echo 'Usuario incorrecto'
    }
    ?>
</body>
</html>

