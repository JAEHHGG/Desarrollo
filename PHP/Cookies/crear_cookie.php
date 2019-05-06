<?php

setcookie('seleccionar-practica',$_GET['practica'],time()+86400,'/');
header('Location:web.php');

?>
