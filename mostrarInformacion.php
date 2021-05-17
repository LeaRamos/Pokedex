<html>
    <head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="recursos/scss/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="recursos/css/style.css">
  <link rel="stylesheet" href="recursos/css/pokedex.css">
    </head>
    <body>
        <?php
        session_start();
        require 'buscarPokemon.php';
        ?>
        
        <div class="container">
            <div class="row align-items-center justify-content-center m-5 p-5 bg-secondary text-white">
                <div class="col-4">
                    <p>
                    <?php
                    if(isset($_SESSION["infoPokemon"])) 
                    {
                        echo '<h3>'.ucfirst($_SESSION["infoPokemon"][1]).':</h3>';
                        echo '<p>'.'Tipo de Pókemon: '.ucfirst($_SESSION["infoPokemon"][3]).'<p>';
                        echo '<p>'.'Descripción: '.ucfirst($_SESSION["infoPokemon"][2]).'<p>';
                    } 
                    ?>
                    </p>
                </div>

                <div class="col-4">
                    <img src="<?php echo getImagen(buscarPorNombre($_SESSION["infoPokemon"][1])); ?>" class="img-fluid" style="" alt="">
                </div>
                    <div class="col-12">
                    <div class="d-grip gap-2">
                        <a href="pokedex.php">
                        <button type="button" class="btn btn-primary btn-lg">Volver
                        </button>
                        </a>
                    </div>
            </div>
        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    </body>
</html>