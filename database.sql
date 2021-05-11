<?php

$conexion = new mysqli("localhost", "root", "", "pokedex", 3306);

if ( $conexion->connect_error ){
    header("locations:error404.php");
} else {
    
}



?>