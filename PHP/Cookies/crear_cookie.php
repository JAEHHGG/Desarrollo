<?php

setcookie('seleccionar-practica',$_GET['practica'], time()+86400,c'/');
header('Location:web.php');

?>
