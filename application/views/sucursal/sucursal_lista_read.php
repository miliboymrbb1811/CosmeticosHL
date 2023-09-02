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
                    <TItle>  <i class="fa fa-building"></i></i>   Sucursa </TItle>
                        <h2><i class="fa fa-building"></i> Sucursal.</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
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
                                    echo form_open_multipart('sucursal/agregar');
                                    ?>
                                    <button type="submit" style="float: right " class=" btn btn-round btn-info">
                                        <!--style= "float: right " para alinear ala derecha -->
                                        <i class="fa fa-plus-circle"></i> Insertar Sucursal
                                    </button>
                                    <?php
                                    echo form_close();
                                    ?>
                                    <br>

                                    <p class="text-muted font-20 m-b-40">
                                        Estas son las sucursales que se encuentran habilitados
                                    </p>
                                    <table id="datatable-buttons" class="table table-dark table-striped" style="width:100%">
                                        <thead>
                                            <tr class="text-center table-dark text-dark">
                                                <th>Sucursal</th>
                                                <th>ubicasion</th>
                                                <th>Creado</th>
                                                <th>Modificado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($sucursal->result() as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row->nombreSucursal; ?></td>
                                                    <td><?php echo $row->direccion; ?></td>
                                                    <td class="text-center"><?php echo formatearFechaMasHora($row->fechaRegistro); ?></td>
                                                    <td class="text-center"><?php echo formatearFechaMasHora($row->fechaActualizacion); ?></td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <?php echo form_open_multipart('sucursal/modificar'); ?>
                                                            <input type="hidden" name="idsucursal" value="<?php echo $row->idSucursal; ?>">
                                                            <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <?php echo form_close(); ?>

                                                            <button class="btn btn-outline-danger" data-toggle="tooltip" onclick="return confirm_modalFotos(<?php echo $row->idSucursal; ?>)" data-placement="top" title="Deshabilitar">
                                                                <i class="fa fa-toggle-off"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>


                                </div><!-- Inicio Div card-box table-responsive -->
                            </div><!-- Fin Div col-sm-12 2 -->
                        </div><!-- Fin Div row 2 -->
                    </div><!-- Fin Div x_content -->
                </div><!-- Fin Div x_panel -->
            </div><!-- Fin Div col-md-12 col-sm-12  -->

            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-building   "></i> Lista de sucursales deshabilitadas.</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <!-- Inicio Div card-box table-responsive -->
                                    <p class="text-muted font-13 m-b-30">
                                        Estas son las sucursales que se encuentran deshabilitadas
                                    </p>
                                    <table id="datatable" class=" table table-dark table-striped" style="width:100%">
                                        <thead>
                                            <tr class="text-center table-dark text-dark">
                                                <th>sucursal</th>
                                                <th>ubicasion</th>
                                                <th>Creado</th>
                                                <th>Modificado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($sucursaldeshabilitados->result() as $rowdeshabilitados) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $rowdeshabilitados->nombreSucursal; ?></td>
                                                    <td><?php echo $rowdeshabilitados->direccion; ?></td>
                                                    <td class="text-center"><?php echo formatearFechaMasHora($rowdeshabilitados->fechaRegistro); ?></td>
                                                    <td class="text-center"><?php echo formatearFechaMasHora($rowdeshabilitados->fechaActualizacion); ?></td>
                                                    <td class="text-center">
                                                        <?php echo form_open_multipart('sucursal/habilitarbd'); ?>
                                                        <input type="hidden" name="idsucrusal" value="<?php echo $rowdeshabilitados->idSucursal; ?>">
                                                        <button class="btn btn-success">
                                                            <i class="fa fa-toggle-on"></i> Habilitar
                                                        </button>
                                                        <?php echo form_close(); ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div><!-- Inicio Div card-box table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Fin Div row -->
    </div><!-- Fin Div container md-3 -->
</div><!-- Fin Right Col Role Main -->


<!------------------------------------------------- Modal ------------------------------------------------------->
<div class="modal fade" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content alert alert-danger ">
            <div class="modal-content alert-secondary ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"> Confirmación Deshabilitar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Estás seguro de Deshabilitar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                    <a id="url-delete" type="submit" class="btn btn-outline-danger"><i class="fa fa-check-circle-o"></i> Deshabilitar</a>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    function confirm_modalFotos(id) {
        var url = '<?php echo base_url() . "index.php/sucursal/deshabilitarbd/"; ?>';
        $("#url-delete").attr('href', url + id);
        // jQuery('#confirmar').modal('show', {backdrop: 'static'});
        $('#modalConfirmacion').modal('show');
    }
</script>