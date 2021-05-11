<?php

$conexion = new mysqli("localhost", "root", "1234", "pokedex", 3306);

if ( $conexion->connect_error ){
    header("locations:error404.php");
} 

?>