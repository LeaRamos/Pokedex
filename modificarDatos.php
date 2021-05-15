<?php

require "conexion.php";

if (isset($_GET["nombre"])) {

    $idPokemon = $_GET["textId"];
    $nuevoNombre = $_GET["nombre"];
    $editar = "UPDATE Pokemon set nombre='$nuevoNombre'  where id = '$idPokemon'";
    $conexion->query($editar);
    header("location: pokedex.php");
}

if (isset($_GET["tipo"])) {
    $idPokemon = $_GET["textId"];
    $nuevoTipo = $_GET["tipo"];
    $editar = "UPDATE Pokemon set tipo='$nuevoTipo'  where id = '$idPokemon'";
    $conexion->query($editar);
    header("location: pokedex.php");
}

?>