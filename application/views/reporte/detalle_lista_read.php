<div class="right_col" role="main"><!-- Inicio Div Right Col Role Main -->
    <div class="container md-3"><!-- Inicio Div container md-3 -->
        <div class="row"><!-- Inicio Div row -->
            <div class="col-md-12 col-sm-12"><!-- Inicio Div col-md-12 col-sm-12  -->
                <div class="x_panel"><!-- Inicio Div x_panel -->
                    <div class="x_title">
                        <tiTLe><i class="fa fa-book"></i> Ventas.</tiTLe>
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
                    <div class="x_content"><!-- Inicio Div x_content -->
                        <div class="row" ><!-- Inicio Div row 2 -->
                            <div class="col-sm-12"><!-- Inicio Div col-sm-12 2 -->
                                <div class="card-box table-responsive"><!-- Inicio Div card-box table-responsive -->
                                    <div class="btn-group " style= "float: right ">
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
                                        <button type="submit"  class="btn btn-round  btn-success">
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

                                    <table id="datatable-buttons" class="table table-dark table-striped" style="width:100%">
                                        <thead>
                                            <tr class="text-center table-dark text-dark">
                                                <th>Nombre</th>
                                            
                                               
                                                <th>Id venta</th>
                                                <th>nombre cliente</th>
                                                <th>fehca de registro</th>
                                                <th>C.I,</th>
                                                <th>precio total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach ($detalle->result() as $row)
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $row->nombreProducto.'  --  '.$row->nombreCategoria; ?></td>
                                               
                                                <td><?php echo $row->idVenta; ?></td>
                                                <td><?php echo $row->nombre.' '.$row->primerApellido; ?></td>
                                                <td><?php echo formatearFechaMasHora($row->fechaRegistro); ?></td>
                                                <td><?php echo $row->numeroCI; ?></td>
                                                <td><?php echo $row->precioTotal; ?></td>
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



