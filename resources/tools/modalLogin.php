    <div class="modal fade" tabindex="-1" id="errorModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" >
                    <?php
                        if($_GET['error']=='login'){
                    ?>
                            Te has equivocado.<br/> Lo mejor es que tires el papel y empieces el dibujo de nuevo.
                    <?php
                        }
                    ?>

                    <?php
                        if($_GET['error']=='regMail'){
                    ?>
                            El email introducido ya existe.
                    <?php
                        }
                    ?>

                    <?php
                        if($_GET['error']=='badMail'){
                    ?>
                        El email introducido no está correctamente escrito.
                    <?php
                        }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
