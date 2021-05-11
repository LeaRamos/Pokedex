<?php
require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="recursos/scss/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/style.css">
    <link rel="stylesheet" href="recursos/css/pokedex.css">
    <title>PoKedex</title>
</head>

<body class="container-fluid p-0 d-flex justify-content-lg-center">
    <header class="row container-fluid  m-0 px-5">
        <?php
            require "header.php";
        ?>

        <div class="row col-12 col-lg-12  p-0 m-0 d-flex  ">

            <div class="contenedor col-12 col-sm-12 col-md-7 col-lg-7 d-flex justify-content-center h-auto">
                <img src="recursos/imgs/pokemon-pikachu 1.jpg" alt="" class="h-auto">
            </div>

            <div class="contenedor col-12 col-sm-12 col-md-5 col-lg-5 ">
                <div class=" d-flex flex-column align-items-center text-center align-items-md-start text-md-start">
                    <h2 class="fs-1 lh-base mb-1 mb-lg-3">Encuentra a tus pokemones favoritos</h2>
                    <p class="my-3 fs-5 my-lg-5">Puedes saber todos sobre los pokemones, sus habilidades,sus fortalezas,su tipo y hasta sus debilidades</p>
                    <a href="pokedex.php" class="btn btn-dark mt-4 mb-5 mt-lg-5 shadow">Ver Pokemones</a>
                </div>
            </div>


        </div>


        <p class="fw-bold pt-1">Hecho con Cariño para la materia Programacion Web 2</p>

    </header>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>