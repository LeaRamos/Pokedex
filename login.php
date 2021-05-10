<?php
session_start();

require "database.sql";

$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


$sql = "SELECT * FROM administrador WHERE usuario = '$usuario'";

$result = $conexion->query($sql);

if ($fila = mysqli_fetch_array($result)) {

    if ($fila["contraseña"] == $password) {
        session_start();

        $_SESSION['usuario'] = $usuario;

        header("Location: pokedex.php");
        exit();
        }
}
header("Location: pokedex.php");
exit();




