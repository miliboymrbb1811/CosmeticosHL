<div class="right_col" role="main"><!-- Inicio Div Right Col Role Main -->
    <div class="container md-3"><!-- Inicio Div container md-3 -->
        <div class="row"><!-- Inicio Div row -->
            <div class="col-md-12 col-sm-12"><!-- Inicio Div col-md-12 col-sm-12 -->
                <div class="x_panel"><!-- Inicio Div x_panel -->
                    <div class="x_title">
                            <TITle><i class="fa fa-male"></i> Lista de proveedores inactivos.</TITle>
                        <h2><i class="fa fa-male"></i> Lista Provedores inactivos.</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content"><!-- Inicio Div x_content -->
                        <div class="row"><!-- Inicio Div row 2 -->
                            <div class="col-sm-12"><!-- Inicio Div col-sm-12 2 -->
                                <div class="card-box table-responsive"><!-- Inicio Div card-box table-responsive -->
                                    <?php 
                                        echo form_open_multipart('proveedor/index');
                                    ?>
                                    <button type="submit" name="buttonIndex" class="btn btn-outline-success">
                                    <i class="fa fa-arrow-circle-left"></i> Volver a proveedor
                                    </button>
                                    <?php 
                                        echo form_close();
                                    ?>
                                    <br>
                                    <p class="text-muted font-13 m-b-30">
                                        Estimado administrador, los clientes que usted está viendo a continuación no serán visibles al momento de realizar una compra o venta.
                                    </p>
                                    <table id="datatable-buttons" class="table table-dark table-striped" style="width:100%">
                                        <thead>
                                            <tr class="text-center table-dark text-dark">
                                                <th>Numero</th>
                                                <th>Nombre</th>
                                                <th>Departamento</th>
                                                <th>Celular</th>
                                                <th>N° de cuenta</th>
                                                <th>Direccion</th>
                                                <th>Descripcion</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach ($proveedor->result() as $row)
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $row->idProveedor; ?></td>
                                                <td><?php echo $row->razonSocial; ?></td>
                                                <td><?php echo $row->Departamento; ?></td>
                                                <td><?php echo $row->celular; ?></td>
                                                <td><?php echo $row->numeroCuenta; ?></td>
                                                <td><?php echo $row->direccion; ?></td>
                                                <td><?php echo $row->descripcion;?></td>
                                                <td class="text-center">
                                                <?php echo form_open_multipart('proveedor/habilitarbd');?>
                                                <input type="hidden" name="idproveedor" value="<?php echo $row->idProveedor;?>">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-toggle-on"></i> Habilitar
                                                </button>
                                                <?php echo form_close();?>
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