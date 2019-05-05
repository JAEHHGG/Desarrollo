<?php

if(!$_COOKIE['seleccionar-practica']) {
    header('Location:practica.php');
}
else if($_COOKIE['seleccionar-practica'] == 'ns') {
    header('Location:nestle.php');
}
else if($_COOKIE['seleccionar-practica'] == 'cp') {
    header('Location:compensar.php');
}
else if($_COOKIE['seleccionar-practica'] == 'bc') {
    header('Location:bancolombia.php');
}
else if($_COOKIE['seleccionar-practica'] == 'br') {
    header('Location:brinsa.php');
}
else if($_COOKIE['seleccionar-practica'] == 'ec') {
    header('Location:ecopetrol.php');
}
else if($_COOKIE['seleccionar-practica'] == 'lr') {
    header('Location:loreal.php');
}
else if($_COOKIE['seleccionar-practica'] == 'ea') {
    header('Location:ean.php');
}
else if($_COOKIE['seleccionar-practica'] == 'cv') {
    header('Location:cruzverde.php');
}
else if($_COOKIE['seleccionar-practica'] == 'av') {
    header('Location:avianca.php');
}
else if($_COOKIE['seleccionar-practica'] == 'lt') {
    header('Location:latam.php');
}
else if($_COOKIE['seleccionar-practica'] == 'evr') {
    header('Location:everis.php');
}
else if($_COOKIE['seleccionar-practica'] == 'tx') {
    header('Location:texmoda.php');
}

?>
