<?php

require "conexion.php";

if (isset($_GET["nombre"])) {

    $idPokemon = $_GET["textId"];
    $nuevoNombre = ucfirst($_GET["nombre"]);
    $nombreViejo = ($_GET["nombreImg"]);
    $editar = "UPDATE Pokemon set nombre='$nuevoNombre'  where id = '$idPokemon'";
    
    $conexion->query($editar);

    $directorio = 'recursos/imgPokemon/';
    $ficheros3 = scandir($directorio);

    foreach ($ficheros3  as $img) {
        $nombreImg=explode(".",$img);
        if($nombreImg[0]==$nombreViejo){
            rename($directorio . $img ,$directorio . $nuevoNombre . "." . $nombreImg[1]);
        }
    }

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
    $nombrePokemon = $_GET["nombre"];
    $nuevaImagen = $_GET["file"];


    $editar = "UPDATE Pokemon set imagen='$nuevaImagen'  where id = '$idPokemon'";
    $conexion->query($editar);



    $nuevoNombrePokemon = ucfirst($nombrePokemon);
    $rutaParaGuardar = "recursos/imgPokemon/";
    $fijarArchivo = $rutaParaGuardar . $nuevoNombrePokemon;
    $tipoDeArchivo = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
    $nombreImagen = $nuevoNombrePokemon . "." . $tipoDeArchivo;


 

    move_uploaded_file($_FILES["file"]["tmp_name"], $fijarArchivo . "." . $tipoDeArchivo);

    header("location: pokedex.php");


}

?>