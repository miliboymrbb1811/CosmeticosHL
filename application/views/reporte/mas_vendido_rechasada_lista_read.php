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
                        <tiTLe> Productos mas vendidos.</tiTLe>
                        <h2><i class="fa fa-book"></i> Reporte de ventas.</h2>
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
                                    <div class="btn-group " style="float: right ">
                                        <!--------------------------boton para ver cliented desavilitado directo en la lista------------------------------->
                                        <!-- <?php
                                                //echo form_open_multipart('cliente/deshabilitados');
                                                ?>
                                        <button type="submit" name="buttonDeshabilitados" class="btn btn-info">
                                            <i class="fa fa-eye"></i> Clientes Deshabilitados
                                        </button>
                                        <?php
                                        //echo form_close();
                                        ?>-->
                                        <!-----------------------------------------------fin---------------------------------------------------------------->
                                        <?php
                                        echo form_open_multipart('reporte/index');
                                        ?>
                                        <button type="submit" class="btn btn-round  btn-success">
                                            <i class="fa fa-mail-reply"></i> regresar
                                        </button>
                                        <?php
                                        echo form_close();
                                        ?>
                                    </div>
                                    <br><br>
                                    <p class="text-muted font-13 m-b-30">
                                        en esta sección pueve ver los productos mas vendidos de manear ageneral , como por fechas.
                                    </p>
                                    <?php
                                    echo form_open_multipart('reporte/vermasvendido_filtro');
                                    ?>
                                    <div class="item form-group has-feedback ">


                                        <div class=" col-md-2">
                                            <label class="col-form-label col-md label-left" for="precio">Fecha de inicio:</label>
                                            <input type="date" name="datePrincipio" class="form-control has-feedback-left" />
                                        </div>

                                        <div class="col-md-2">
                                            <label class="col-form-label col-md label-left" for="precio">Fecha de fin:</label>
                                            <input type="date" name="dateFin" class="form-control has-feedback-left" value="<?php echo date('Y-m-d'); ?>" />
                                        </div><br>

                                        <div class="col-md2">
                                            <label class="col-form-label col-md label-left"></label>
                                            <button type="submit" class=" btn-bloc btn btn-round  btn-success">
                                                <i class="fa fa-search"></i> Buscar
                                            </button>
                                        </div>
                                        <?php
                                        echo form_close();
                                        ?>

                                    </div>



                                    <table id="datatable-buttons" class="table table-dark table-striped" style="width:100%">
                                        <thead>
                                            <tr class="text-center table-dark text-dark">
                                                <th width="100px ">foto</th>
                                                <th>Producto</th>
                                                <th width="100px ">totol recaudado Bs</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($venta->result() as $row) {
                                            ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php

                                                        $foto = $row->foto;
                                                        if (!$foto) {
                                                        ?>
                                                            <img src="<?php echo  base_url(); ?>uploads/products_images/sinImagen.jpg" height="50px" width="50px">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?php echo base_url(); ?>uploads/products_images/<?php echo $foto; ?>" width="50px" height="50px">
                                                        <?php
                                                        }
                                                        ?>

                                                    </td>
                                                    <td><?php echo $row->nombreProducto; ?></td>
                                                    <td class="row d-flex justify-content-center"><?php echo $row->total; ?></td>

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