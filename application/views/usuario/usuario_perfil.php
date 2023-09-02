<div class="right_col" role="main">
    <!-- Inicio Div Right Col Role Main -->
    <div class="container md-3">
        <!-- Inicio Div container md-3 -->
        <div class="row">
            <!-- Inicio Div row -->
            <div class="col-md-12 col-sm-12 ">
                <!-- Inicio Div col-md-12 col-sm-12  -->
                <div class="x_panel">
                    <!-- Inicio Div x_panel -->
                    <div class="x_title">
                        <h2><i class="fa fa-users"></i> Mi Perfil.</h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <!-- Inicio Div x_content -->
                        <div class="row">
                            <!-- Inicio Div row 2 -->
                            <div class="col-sm-12">
                                <!-- Inicio Div col-sm-12 2 -->
                                <div class="card-box table-responsive">
                                    <!-- Inicio Div card-box table-responsive -->
                                    <?php
                                    echo form_open_multipart('usuarios/inicio');
                                    ?>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-home"></i> Volver a Inicio
                                    </button>
                                    <?php
                                    echo form_close();
                                    ?>
                                    <br>
                                    <?php
                                    foreach ($infousuario->result() as $row) {
                                    ?>
                                        <div class=" card  bg-dark ">
                                            <div >
                                                <?php
                                                $foto = $this->session->userdata('idusuario') . '.jpg';
                                                if ($foto == "") {
                                                ?>
                                                    <img src="<?php echo base_url(); ?>/uploads/user/1user.jpg" alt="..." width="350px" height="350px"> 
                                                <?php 
                                                } else {
                                                ?>
                                                    <img class="mx-auto d-block"src="<?php echo base_url(); ?>/uploads/user/<?php echo $foto; ?>" alt="..." width="250px" height="250px">
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="card col-md bg-dark text-center">
                                                <div class="">
                                                    <h1><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="top" title="Nombre"></i> <?php echo $row->nombre; ?> <?php echo $row->primerApellido; ?> <?php echo $row->segundoApellido; ?>
                                                        <?php echo formatearVerificado($row->estado); ?>
                                                    </h1>
                                                    <h3><i class="fa fa-user" data-toggle="tooltip" data-placement="top" title="Nombre de Usuario"></i> <?php echo $row->login; ?>
                                                    </h3>
                                                    <h3><i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="Cargo"></i> <?php echo $this->session->userdata('tipo') ?></h3>
                                                    <h3><i class="fa fa-calendar" data-toggle="tooltip" data-placement="top" title="Fecha de Ingreso"></i> <?php echo formatearsoloFecha($row->fechaRegistro); ?></h3>
                                                    <h3><i class="fa fa-list-alt" data-toggle="tooltip" data-placement="top" title="C.I."></i> <?php echo $row->numeroCI; ?></h3>
                                                    <h3><i class="fa fa-mobile-phone" data-toggle="tooltip" data-placement="top" title="Celular"></i> <?php echo $row->numeroCelular; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div><!-- Inicio Div card-box table-responsive -->
                            </div><!-- Fin Div col-sm-12 2 -->
                        </div><!-- Fin Div row 2 -->
                    </div><!-- Fin Div x_content -->
                </div><!-- Fin Div x_panel -->
            </div><!-- Fin Div col-md-12 col-sm-12  -->
        </div><!-- Fin Div row -->
    </div><!-- Fin Div container md-3 -->
</div><!-- Fin Right Col Role Main -->

<!-- Modal -->
<div class="modal fade" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header alert-danger">
                <h5 class="modal-title font-weight-bold">CONFIRMAR ACCIÓN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de deshabilitarlo? Presione Deshabilitar
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                <a id="url-delete" type="submit" class="btn btn-outline-danger"><i class="fa fa-toggle-off"></i> Deshabilitar</a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirm_modalDeshabilitar(id) {
        var url = '<?php echo base_url() . "index.php/usuarios/deshabilitarbd/"; ?>';
        $("#url-delete").attr('href', url + id);
        // jQuery('#confirmar').modal('show', {backdrop: 'static'});
        $('#modalConfirmacion').modal('show');
    }
</script>