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


