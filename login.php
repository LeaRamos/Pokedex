<?php


require "conexion.php";

$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


$sql = "SELECT * FROM Usuario WHERE nombre = '$usuario'";

$result = $conexion->query($sql);

if ($fila = mysqli_fetch_array($result)) {

    if ($fila['pass'] == $password) {
        session_start();

        $_SESSION['nombre'] = $usuario;

        header("Location: pokedex.php");
        exit();
        }
}

header("Location: pokedex.php");
exit();




