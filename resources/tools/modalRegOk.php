<div class="modal fade" tabindex="-1" id="registroModalOk">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title " id="exampleModalLabel">Registro Completado</h5>
            </div>
            <div class="modal-body" >
                <div class="container-fluid ">
                    <div class="row justify-content-around text-center">
                        <?php
                        $ahora = new DateTime(date('d-m-Y'));
                        $mañana = $ahora ->add((new DateInterval('P2D')));
                        $fechaFinal = $mañana->format('d-m-Y');
                        ?>
                        <strong>El registro ha sido completado con éxito.</strong> <br/>
                        Si después del <strong><?php echo ($fechaFinal)?> </strong>no puedes acceder, contacta con el centro.
                    </div>
                </div>
        </div>
    </div>
    </div>
</div>



