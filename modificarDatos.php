<?php

require "conexion.php";

if (isset($_GET["id"])) {
    if (isset($_POST["id"])) {
        $idCambiante = $_POST["id"];
        $idAnterior = $_GET["id"];
        $editar = "UPDATE Pokemon set id='$idCambiante'  where id = '$idAnterior'";
        $conexion->query($borrar);
        header("location: pokedex.php");
    } else {
        echo "No llegó variable para cambiar";
    }
} else {
    echo "No llegó id al cual cambiar";
}

?>