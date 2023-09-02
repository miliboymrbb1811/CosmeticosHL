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
                        <tiTLe> 'Ventas.'</tiTLe>
                        <h2><i class="fa fa-archive"></i> Reporte de ventas.</h2>
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
                                        Estimado administrador, en esta seccion puede visualizar todas las ventas realizadas con exito.
                                    </p>
                                    <div class="container">
                                        <div class="row row align-items-middle">
                                            <div class="col-xl col-md-6 mb-4  ">

                                                <div class=" col-md-12 card   border-info bg-dark shadow h-100" style="border-radius: 10px ">
                                                    <?php
                                                    echo form_open_multipart('reporte/verventas_filtro');
                                                    ?>
                                                    <div class="card-body">
                                                        <?php
                                                        foreach ($a->result() as $row)
                                                        ?>

                                                        <div class="h2 mb-0 font-weight-bold">
                                                            <div class=" col-md-5">
                                                                <h3 class="fa fa-line-chart text-info"> TOTAL VENDIDO: <?php echo $row->totall; ?> Bs.</h3>
                                                            </div>

                                                            <div class=" col-md-3">
                                                                <h5>
                                                                    <p class="col-form-label col-md label-left" for="precio">Fecha de inicio:</p>
                                                                </h5>
                                                                <input type="date" name="datePrincipio" class="form-control has-feedback-left" />
                                                            </div>

                                                            <div class="col-md-3">
                                                                <h5><label class="col-form-label col-md label-left" for="precio">Fecha de fin:</label></h5>
                                                                <input type="date" name="dateFin" class="form-control has-feedback-left" value="<?php echo date('Y-m-d'); ?>" />
                                                            </div><br>

                                                            <div class="col-md-1">

                                                                <button type="submit" class=" btn-bloc btn btn-round  btn-success">
                                                                    <i class="fa fa-search"></i> Buscar
                                                                </button>
                                                            </div>
                                                            <?php
                                                            echo form_close();
                                                            ?>
                                                            <div class=" col-md-12">
                                                                <h3 class="text-info"> </h3>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <?php
                                                    echo form_close();
                                                    ?>
                                                </div>
                                            </div>

                                        </div>

                                        <table id="datatable-buttons" class="table table-dark table-striped" style="width:100%">
                                            <thead>
                                                <tr class="text-center table-dark text-dark">
                                                    <th>numero</th>
                                                    <th>nombre del cliente</th>
                                                    <th>C.I.</th>
                                                    <th>N° de celular</th>
                                                    <th>fehca de registro</th>
                                                    <th>Atendido</th>
                                                    <th>total</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($venta->result() as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row->idVenta; ?></td>
                                                        <td><?php echo $row->nombre . ' ' . $row->primerApellido; ?></td>
                                                        <td><?php echo $row->numeroCI; ?></td>
                                                        <td><?php echo $row->numeroCelular; ?></td>
                                                        <td><?php echo formatearFechaMasHora($row->fechaRegistro); ?></td>
                                                        <td><?php echo $row->login; ?></td>
                                                        <td><?php echo $row->total; ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div><!-- Inicio Div card-box table-responsive -->
                                <!-- Fin Div col-sm-12 2 -->
                            </div><!-- Fin Div row 2 -->
                        </div><!-- Fin Div x_content -->
                    </div><!-- Fin Div x_panel -->
                </div><!-- Fin Div col-md-12 col-sm-12  -->
            </div><!-- Fin Div row -->
        </div><!-- Fin Div container md-3 -->
    </div><!-- Fin Right Col Role Main -->