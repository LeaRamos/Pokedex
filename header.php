<nav class="navbar navbar-expand-sm navbar-dark mb-4 border-bottom">
    <div class="contenedor-nav container-fluid pt-2">

        <a href="index.php" class="navbar-brand">
            <img src="recursos/imgs/pokemon.png" alt="" width="50">
            <p class="text-dark fw-bolder d-inline-block">PoKedex</p>
        </a>

        <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Content" aria-expanded="false" aria-controls="Content">

            <i class="fas fa-bars"></i>

        </button>

        <div class="collapse navbar-collapse " id="Content">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-sm-1 me-md-3"><a href="index.php" class="link-navegador nav-link text-dark fw-bolder">Inicio</a> </li>
                <li class="nav-item me-sm-1 me-md-3"><a href="pokedex.php" class="link-navegador nav-link text-dark fw-bolder">Pokedex</a></li>
                <li class="nav-item me-sm-1 me-md-3">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Login  </button></li>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="login.php" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Como se que no sos del Equipo Rocket?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <input class="border-top-0 border-end-0 border-bottom-1 border-start-0 border-primary" name="usuario" type="text" placeholder="Ingrese su PokeUsuario">
                                        <input class="border-top-0 border-end-0 border-bottom-1 border-start-0 border-primary" name="password" type="password" placeholder="ingrese su contraseña">


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cerrar</button>
                                        <button class="  fw-bolder btn btn-primary" type="submit" value="loguear">Soy Entrenador Pokemon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>