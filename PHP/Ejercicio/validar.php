<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    val = [
        "Julio" => "Hernández",
        "Juan" => "Perez",
        "Natalia" => "Morales",
        "Sofia" => "Mora",
    ];

    if (isset($val[$_POST['usuario']])) {
        if ($val[$_POST['usuario']] == $_POST['pass']){
            echo 'Hola, Bienvenido';
        } else {
            echo 'Verificar Usuario y/o contraseña'
        }
    }
    ?>
</body>
</html>

