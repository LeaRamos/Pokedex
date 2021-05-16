<?php


require "conexion.php";

$sql = "SELECT * FROM Pokemon";
$result = $conexion->query($sql);

//imagen de los pokemones
$directorio = 'recursos/imgPokemon/';
$ficheros1 = scandir($directorio);

//imagen de los tipos de pokemones
$directorio2 = 'recursos/tiposImg/';
$ficheros2 = scandir($directorio2);

function pokemonCarta($id, $nombre, $imagenTipo, $imagenPokemon, $descripcion, $tipo)
{

    echo "<div href='#' class='text-decoration-none bg-light border me-md-4 me-lg-4 me-xl-4 border-2 rounded text-dark col-12 col-sm-5 col-md-5 col-lg-3 row px-1 me-2 mt-3 align-content-center'>

        <div class='col-6 p-0 '>
        <img src=$imagenTipo class='w-100 border-end border-2' style='max-height: 155px;' alt=''>
        </div>
        <div class='col-6 p-2'>
        <h6 class='card-title mb-3'>$id # $nombre</h6>
        <div class='d-block d-flex flex-column'>
        <img class='col-4 mb-3' src='$imagenPokemon ?>' alt=''>";

    if (isset($_SESSION["nombre"])) {
        if (isset($id))
            echo "<a href='borrarPokemon.php?id=$id' class='bg-danger col-6 text-decoration-none text-light rounded text-center'>Eliminar</a>";

        /* data-bs-toggle='modal' data-bs-target='#editarPokemon'*/

        echo "<a href='editarPokemon.php?id=$id&nombre=$nombre&descripcion=$descripcion&tipo=$tipo&imagen=$imagenPokemon' data-bs-target='#editarPokemon' class='bg-dark col-6 text-decoration-none text-light bg-dark rounded text-center mt-2'>Editar</a>";


        /*echo "<a data-bs-toggle='modal' data-bs-target='#editarPokemon' href='editarPokemon.php?id=$id' class='bg-dark col-6 text-decoration-none text-light bg-dark rounded text-center mt-2'>Editar</a>";*/
    } else {

        echo "<a href='pantallaPokemon.php?id=$id&nombre=$nombre&descripcion=$descripcion&tipo=$tipo&imagen=$imagenPokemon' data-bs-target='#editarPokemon' class='bg-dark col-6 text-decoration-none text-light bg-dark rounded text-center mt-2'>Abrir</a>";
    }

}


?>

