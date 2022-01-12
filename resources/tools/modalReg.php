<div class="modal fade" tabindex="-1" id="registroModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Termina el Registro</h5>
            </div>
            <div class="modal-body" >
                <div class="container-fluid ">
                    <div class="row justify-content-around ">
                        <form class="formulario col-10 col-md-7" action="resources/controllers/formManagement.php" method="post">
                            <input type="text" hidden name="type" value="terminar">
                            <div class="mb-3">
                                <label for="pass1" class="form-label">Elige una contraseña</label>
                                <input type="password" class="form-control" id="pass1" required name="pass1">
                            </div>
                            <div class="mb-3">
                                <label for="pass2" class="form-label">Repite la contraseña</label>
                                <input type="password" class="form-control" id="pass2" required name="pass2">
                            </div>
                            <?php
                            if($_SESSION['regTipoUser']==2){
                                ?>
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="birthday" required name="birthday" value="<?php echo (isset($_POST['nombre']))?$_POST['nombre']:'';?>">
                                </div>
                                <div class="mb-3">
                                    <label for="titulation" class="form-label">Titulación</label>
                                    <input type="text" class="form-control" id="titulation"  required name="titulation">
                                </div>

                                <div class="mb-3">
                                    <label for="numss" class="form-label">Número de la seguridad Social</label>
                                    <input type="tel" class="form-control" id="inputTelefono" required name="telefono">
                                </div>

                                <?php
                            }
                            ?>
                            <button type="submit" class="btn btn-primary" id="btn-registroFinal" >Completa tu registro</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </div>
</div>


