<!-- Modal modificar pokemon-->

<?php

require "conexion.php";

?>

<div class='modal fade' id='edicionNombre' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarDatos.php" method="get">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Nombre</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <input class='' name='textId' type='hidden' value='<?php echo $fila["id"] ?>'>
                    <input class='' name='nombre' value="<?php echo $fila["nombre"] ?>" type='text'
                           placeholder='Escriba nuevo nombre'>

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class='modal fade' id='edicionTipo' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarDatos.php" method="get">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Tipo</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>

                    <input class='' name='textId' type='hidden' value='<?php echo $fila["id"] ?>'>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='tipo' id='agua' value='agua'>
                        <label class='form-check-label' for='inlineCheckbox1'>Agua</label>
                    </div>

                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='tipo' id='hierba' value='planta'>
                        <label class='form-check-label' for='inlineCheckbox1'>Hierba</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='tipo' id='electrico' value='electrico'>
                        <label class='form-check-label' for='inlineCheckbox1'>Electrico</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='tipo' id='fuego' value='fuego'>
                        <label class='form-check-label' for='inlineCheckbox1'>Fuego</label>
                    </div>

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class='modal fade' id='edicionDescripción' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action='login.php' method='POST' enctype='multipart/form-data'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Descripción</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='mb-3 mt-2 p-2'>
                        <textarea class='form-control' name='descripcion' id='descripcion'
                                  placeholder='Escriba nueva descripción'></textarea>
                    <div class='invalid-feedback'>
                        Descripcion
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class='modal fade' id='edicionImagen' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action='login.php' method='POST' enctype='multipart/form-data'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Imágen</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>

                    <div class='mb-3'>
                        <label for='validationTextarea' class='form-label'>Seleccione una nueva imágen</label>
                        <input type='file' name='file' class='form-control' aria-label='file example' required>
                        <div class='invalid-feedback'>Example invalid form file feedback</div>
                    </div>


                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- FIN Modal modificar pokemon-->