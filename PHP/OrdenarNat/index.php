<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Natural</title>
</head>
<body>
   <?php
    $usuarios = array('Julio'=>'2', 'Natalia'=>'3', 'Sofia'=>'1');
natsort($usuarios);

foreach ($usuarios as $key => $val) {
    echo $key ." = " . $val . "<br>";
}
    ?>
</body>
</html>
