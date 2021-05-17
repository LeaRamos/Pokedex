<?php

require "conexion.php";

if (isset($_GET["id"])) {

    $idBorrar = $_GET["id"];

    $borrar = "DELETE FROM Pokemon where id = '$idBorrar'";
    $conexion->query($borrar);
    header("location: pokedex.php");
} else {

    echo "No tiene id";

}


?>