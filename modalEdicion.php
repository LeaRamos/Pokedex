<!-- Modal modificar pokemon-->

<?php

require "conexion.php";

echo "<div class='modal fade' id='edicionPokemon' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
<div class='modal-dialog'>
    <div class='modal-content'>
        <form action='login.php' method='POST' enctype='multipart/form-data'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Editar Pokemon</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>

                <input class='' name='numero' type='numeber' placeholder='Posicion de la Pokedex'>
                <input class='' name='nombrePokemon' type='text' placeholder='Nombre Pokemon'>

                <div class='mt-3 mb-1'>¿Que tipo es?</div>

                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='tipo' id='agua' value='agua'>
                    <label class='form-check-label' for='inlineCheckbox1'>Agua</label>
                </div>

                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='tipo' id='electrico' value='electrico'>
                    <label class='form-check-label' for='inlineCheckbox1'>Electrico</label>
                </div>
                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='tipo' id='fuego' value='fuego'>
                    <label class='form-check-label' for='inlineCheckbox1'>Fuego</label>
                </div>
                <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='tipo' id='planta' value='planta'>
                    <label class='form-check-label' for='inlineCheckbox1'>Planta</label>
                </div>

                <br>
                <br>

                <div class='mb-3'>
                    <label for='validationTextarea' class='form-label'>Cuentanos un poco del pokemon:</label>
                    <textarea class='form-control' name='descripcion' id='descripcion'
                              placeholder='Required example textarea'></textarea>
                    <div class='invalid - feedback'>
                        Descripcion
                    </div>
                </div>

                <div class='mb-3'>
                    <label for='validationTextarea' class='form-label'>Fotito para el Insta</label>
                    <input type='file' class='form-control' aria-label='file example' required>
                    <div class='invalid-feedback'>Example invalid form file feedback</div>
                </div>


            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar Pokemon
                </button>
            </div>
        </form>
    </div>
</div>
</div>";

?>
<!-- FIN Modal modificar pokemon-->