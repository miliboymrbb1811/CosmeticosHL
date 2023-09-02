<div class="right_col" role="main">
    <!-- Inicio Div Right Col Role Main -->
    <div class="container md-3">
        <!-- Inicio Div container md-3 -->
        <div class="row">
            <!-- Inicio Div row -->
            <div class="col-md-12 col-sm-12">
                <!-- Inicio Div col-md-12 col-sm-12  -->
                <div class="x_panel">
                    <!-- Inicio Div x_panel -->
                    <div class="x_title">
                        <title> <i class="fa fa-cubes"></i> producto </title>
                        <h2><i class="fa fa-cubes"></i> producto.</h2>
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
                                    <div class="btn-group" style="float: right ">
                                        <?php
                                        echo form_open_multipart('producto/deshabilitados');
                                        ?>
                                        <button type="submit" style="float: right " name="buttonDeshabilitados" class="btn btn-round btn btn-info">
                                            <i class="fa fa-eye-"></i> producto Deshabilitados
                                        </button>
                                        <?php
                                        echo form_close();
                                        ?>
                                        <?php
                                        echo form_open_multipart('producto/agregar');
                                        ?>
                                        <button type="submit" class=" btn btn-round btn-info">
                                            <!--style= "float: right " para alinear ala derecha -->
                                            <i class="fa fa-plus-circle"></i>Insertar Producto
                                        </button>
                                        <?php
                                        echo form_close();
                                        ?>
                                    </div>
                                    <br><br>
                                    <p class="text-muted font-13 m-b-30">
                                        Hora Actual: <?php echo date('d/m/Y H:i:s') ?>
                                        <br>
                                        Tipo: <?php echo $this->session->userdata('tipo') ?>
                                        <br>
                                        ID: <?php echo $this->session->userdata('idusuario') ?>
                                        <br>
                                        Estos datos no serán visibles en el producto final.
                                    </p>

                                    <table id="datatable-buttons" class="table table-dark table-striped" style="width:100%">
                                        <thead>
                                            <tr class="text-center table-dark text-dark ">
                                                <th>Foto</th>
                                                <th>Nombre</th>
                                                <th>Marca</th>
                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>codigo</th>
                                                <th>Stock</th>
                                                <th>Creado</th>
                                                <th>Modificado</th>
                                                <th>descripcion</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($producto->result() as $row) {
                                            ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php

                                                        $foto = $row->foto;
                                                        if (!$foto) {
                                                        ?>
                                                            <img src="<?php echo  base_url(); ?>uploads/products_images/sinImagen.jpg"  height="50px" width="50px">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?php echo base_url(); ?>uploads/products_images/<?php echo $foto; ?>"  width="50px" height="50px">
                                                        <?php
                                                        }
                                                        ?>

                                                    </td>
                                                    <td><?php echo $row->nombreProducto; ?></td>
                                                    <td><?php echo $row->nombreMarca; ?></td>
                                                    <td><?php echo $row->nombreCategoria; ?></td>
                                                    <td><?php echo $row->precio; ?></td>
                                                    <td><?php echo $row->codigo; ?></td>
                                                    <td>
                                                        <?php
                                                        echo $row->stock;
                                                        ?>
                                                        <?php
                                                        if ($row->stock <= 100) {
                                                            echo "<font color=\"red\"><span class=spinner-grow></span><marquee  scrollamount=\"30\" scrolldelay=\"1000\" loop=\"50\"> stock por agotarse</marquee></font>";
                                
                                                        } else {
                                                            echo "<font color=\"green\"><span class=spinner-grow></span><marquee  scrollamount=\"30\" scrolldelay=\"500\" loop=\"100\"> stock optimo</marquee> </font>";
                                                        }
                                                        ?>
                                                      
                                                    </td>

                                                    <td><?php echo formatearFechaMasHora($row->fechaRegistro); ?></td>
                                                    <td><?php echo formatearFechaMasHora($row->fechaActualizacion); ?></td>
                                                    <th><?php echo $row->descripcion; ?></th>

                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <?php echo form_open_multipart('producto/modificar'); ?>
                                                            <input type="hidden" name="idproducto" value="<?php echo $row->idProducto; ?>">
                                                            <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <?php echo form_close(); ?>

                                                            <?php echo form_open_multipart('producto/eliminarbd'); ?>
                                                            <input type="hidden" name="idproducto" value="<?php echo $row->idProducto; ?>">
                                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                            <?php echo form_close(); ?>


                                                            <button class="btn btn-outline-danger" data-toggle="tooltip" onclick="return confirm_modalmodificar(<?php echo $row->idProducto; ?>)" data-placement="top" title="Deshabilitar">
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
        </div><!-- Fin Div row -->
    </div><!-- Fin Div container md-3 -->
</div><!-- Fin Right Col Role Main -->

<!--------------------------------------------------------- Modal -------------------------------------------------->
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

    <script>
        function confirm_modalmodificar(id) {
            var url = '<?php echo base_url() . "index.php/producto/deshabilitarbd/"; ?>';
            $("#url-delete").attr('href', url + id);
            // jQuery('#confirmar').modal('show', {backdrop: 'static'});
            $('#modalConfirmacion').modal('show');
        }
    </script>