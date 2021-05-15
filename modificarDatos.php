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

if (isset($_GET["descripcion"])) {
    $idPokemon = $_GET["textId"];
    $nuevaDescripcion = $_GET["descripcion"];
    $editar = "UPDATE Pokemon set descripcion='$nuevaDescripcion'  where id = '$idPokemon'";
    $conexion->query($editar);
    header("location: pokedex.php");
}

if (isset($_GET["file"])) {
    $idPokemon = $_GET["textId"];
    $nuevaImagen = $_GET["file"];
    $editar = "UPDATE Pokemon set imagen='$nuevaImagen'  where id = '$idPokemon'";
    $conexion->query($editar);
    header("location: pokedex.php");
}

?>