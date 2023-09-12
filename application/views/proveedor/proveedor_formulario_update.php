<div class="right_col" role="main">
    <!-- Inicio Div Right Col Role Main -->
    <div class="container md-3">
        <!-- Inicio Div container md-3 -->
        <div class="row">
            <!-- Inicio Div row -->
            <div class="col-md-12 col-sm-12 ">
                <!-- Inicio Div col-md-12 col-sm-12  -->
                <div class="x_panel bg-dark text-white ">
                    <!-- Inicio Div x_panel -->
                    <div class="x_title">
                        <h2> <span class="glyphicon glyphicon-pencil   "></span>  Actualizar datos del cliente.</h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <!-- Inicio Div x_content -->
                        <?php
                        echo form_open_multipart('proveedor/index');
                        ?>
                        <button type="submit" name="buttonInhabilitados" class="btn btn-outline-success">
                            <i class="fa fa-arrow-circle-left"></i> Volver a proveedor
                        </button>
                        <?php
                        echo form_close();
                        ?>
                        <br>
                        <p class="text-muted font-13 m-b-30">
                            Usted está por actualizar los datos de un proveedor, por favor llene el siguiente campo:
                        </p>
                        <?php
                        foreach ($infoproveedor->result() as $row) {
                            echo form_open_multipart('proveedor/modificarbd');
                        ?>
                            <input type="hidden" name="idproveedor" value="<?php echo $row->idProveedor; ?>">
                       
                            <br>
                            <div class="item form-group has-feedback">
                                <label class="col-form-label col-md-1 label-align" for="razonsocial">Razon Social:</label>
                                <div class="col-md-3">
                                    <input type="text" name="razonsocial" value="<?php echo $row->razonSocial; ?>" class="form-control has-feedback-left" required>
                                    <span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <label class="col-form-label col-md-1 label-align" for="departamento">Departamento:</label>
                                <div class="col-md-3">
                                    <input type="text" name="departamento" value="<?php echo $row->Departamento; ?>" class="form-control has-feedback-left" required>
                                    <span class="fa fa-paper-plane-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <label class="col-form-label col-md-1 label-align" for="ubicasion">ubicasion:</label>
                                <div class="col-md-3">
                                    <input type="text" name="ubicasion" value="<?php echo $row->direccion; ?>" class="form-control has-feedback-left">
                                    <span class="fa fa-thumb-tack form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="item form-group has-feedback">
                                <label class="col-form-label col-md-1 label-align" for="numerocuenta">N° de cuenta bancaria:</label>
                                <div class="col-md-3">
                                    <input type="text" name="numerocuenta" value="<?php echo $row->numeroCuenta; ?>" class="form-control has-feedback-left">
                                    <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <label class="col-form-label col-md-1 label-align" for="celular">N° de celular:</label>
                                <div class="col-md-3">
                                    <input type="text" name="celular" value="<?php echo $row->celular; ?>" class="form-control has-feedback-left">
                                    <span class="fa fa-mobile-phone form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <label class="col-form-label col-md-1 label-align" for="descripcion">Descripcion:</label>
                                <div class="col-md-3">
                                    <input type="text" name="descripcion" value="<?php echo $row->descripcion; ?>" class="form-control has-feedback-left">
                                    <span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalConfirmacion">
                                <i class=""><span class="glyphicon glyphicon-floppy-open"></span></i> Guardar
                            </button>

                    </div><!-- Fin Div x_content -->
                </div><!-- Fin Div x_panel -->
            </div><!-- Fin Div col-md-12 col-sm-12  -->
        </div><!-- Fin Div row -->
    </div><!-- Fin Div container md-3 -->
</div><!-- Fin Right Col Role Main -->



<!--------------------------------------------------------- Modal---------------------------------------------- -->
<div class="modal fade" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content  alert alert-warning  ">
            <div class="modal-content  alert-secondary">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmación Edición</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Estás seguro de editarlo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Editar</button>
                </div>
            </div>
        </div>
    </div>

<?php
                            form_close();
                        }
?>