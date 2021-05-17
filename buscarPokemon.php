<?php

function buscarPorNombre($nombre){
    require "conexion.php";
    $sql = "select * from Pokemon where nombre like '$nombre'";
    $resultado = $conexion->query($sql);
    if($pokemonEncontrado = mysqli_fetch_array($resultado)){
     return $pokemonEncontrado;
    }
    else{
        $miarray=array();

        return $miarray;
    }
}

function getImagen(array $pokemonEncontrado){
    $numeroDeElemtos=count($pokemonEncontrado);
    if($numeroDeElemtos>0){
        return "recursos/imgPokemon/$pokemonEncontrado[1].png";
    }
    else{
        return "getImagen";
    }
}

function getNombre(array $pokemonEncontrado){
    $nombre=$_POST['nombre'];
    $numeroDeElemtos=count($pokemonEncontrado);
    if($numeroDeElemtos>1){
        return $pokemonEncontrado[1];

    }
    else{
        return "getNombre";
    }

}



