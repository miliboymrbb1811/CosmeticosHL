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
                        <title> <i class="fa fa-folder"></i> Reporte.</title>
                        <h2><i class="fa fa-folder"></i> Reporte.</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                <div>
                                    <!-- Inicio Div card-box table-responsive -->

                                    <!-------------------------------------------------------- contador ---------------------------------------------------->
                                    <div class="container">
                                        <div class="row row align-items-middle">
                                            <div class="col-xl-3 col-md-6 mb-4  ">
                                                <div class="card   border-info bg-dark shadow h-100" style="border-radius: 10px ">
                                                    <?php
                                                    echo form_open_multipart('cliente/index');
                                                    ?>
                                                    <button type="submit" class="btn btn-dark btn-block" style="border-radius: 20px ">

                                                        <div class="card-header bg-dark font-weight-bold text-light">
                                                            <h2>CLIENTES</h2>
                                                        </div>

                                                        <div class="card-body">

                                                            <div class="h2 mb-0 font-weight-bold">
                                                                <h3 class="fa fa-users text-info"> Clientes: <?php echo $this->reporte_model->cantidaddeclientes(); ?></h3>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <?php
                                                    echo form_close();
                                                    ?>
                                                </div>
                                            </div>



                                            <div class="col-xl-3 col-md-6 mb-4  ">
                                                <div class="card   border-dark bg-dark shadow h-100" style="border-radius: 10px ">
                                                    <?php
                                                    echo form_open_multipart('reporte/verrechaso');
                                                    ?>
                                                    <button type="submit" class="btn btn-danger btn-block" style="border-radius: 20px ">

                                                        <div class="card-header bg-dark font-weight-bold text-light">
                                                            <h2>VENTAS CANCELADAS</h2>
                                                        </div>

                                                        <div class="card-body">

                                                            <div class="h2 mb-0 font-weight-bold">
                                                                <h3 class="fa fa-users text-info"> Anulada: <?php echo $this->reporte_model->cantidadventascanseladas(); ?></h3>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <?php
                                                    echo form_close();
                                                    ?>
                                                </div>
                                            </div>



                                            <div class="col-xl-3 col-md-6 mb-4  ">
                                                <div class="card   border-dark bg-dark shadow h-100" style="border-radius: 10px ">
                                                    <?php

                                                    echo form_open_multipart('reporte/verventas');
                                                    ?>
                                                    <button type="submit" class="btn btn-warning btn-block" style="border-radius: 20px ">

                                                        <div class="card-header bg-dark font-weight-bold text-light">
                                                            <h2>VENTAS EFECTIVAS</h2>
                                                        </div>

                                                        <div class="card-body">

                                                            <div class="h2 mb-0 font-weight-bold">
                                                                <h3 class="fa fa-users text-info"> Efectiva: <?php echo $this->reporte_model->cantidadventasefectivas(); ?></h3>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <?php
                                                    echo form_close();
                                                    ?>
                                                </div>
                                            </div>


                                            <div class="col-xl-3 col-md-6 mb-4  ">
                                                <div class="card   border-info bg-dark shadow h-100" style="border-radius: 10px ">
                                                    <?php
                                                    echo form_open_multipart('empleado/index');
                                                    ?>
                                                    <button type="submit" class="btn btn-dark btn-block" style="border-radius: 20px ">

                                                        <div class="card-header bg-dark font-weight-bold text-light">
                                                            <h2>EMPLEADOS</h2>
                                                        </div>

                                                        <div class="card-body">

                                                            <div class="h2 mb-0 font-weight-bold">
                                                                <h3 class="fa fa-users text-info"> Empleado: <?php echo $this->reporte_model->cantidadempleados(); ?></h3>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <?php
                                                    echo form_close();
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <!-------------------------------------------------------- images butons---------------------------------------------------->
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="  shadow h-100">
                                                <?php
                                                echo form_open_multipart('reporte/verventas');
                                                ?>
                                                <button type="submit" style="border-radius: 20px " class="btn btn-dark btn-block">
                                                    <img style="border-radius: 10px " src="<?php echo  base_url(); ?>uploads/iconos_images/verDetalle.png" width="100px" height="100px" alt="Ver ventas">
                                                    <br> Ver ventas realizadas
                                                </button>
                                                <?php
                                                echo form_close();
                                                ?>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="  shadow h-100">
                                                <?php
                                                echo form_open_multipart('reporte/verrechaso');
                                                ?>
                                                <button type="submit" style="border-radius: 20px " class=" btn btn-block btn-danger">
                                                    <img style="border-radius: 10px " src="<?php echo  base_url(); ?>uploads/iconos_images/verCancelado.png" width="100px" height="100px" alt="Ver ventas">
                                                    <br> Ver ventas Cancelada
                                                </button>
                                                <?php
                                                echo form_close();
                                                ?>
                                                </a>
                                            </div>
                                        </div>



                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="  shadow h-100">
                                                <?php
                                                echo form_open_multipart('reporte/detalle');
                                                ?>
                                                <button type="submit" style="border-radius: 20px " class=" btn btn-block btn-info">
                                                    <img style="border-radius: 10px " src="<?php echo  base_url(); ?>uploads/iconos_images/verVenta.png" width="100px" height="100px" alt="Ver ventas">
                                                    <br> Ver detalle de ventas
                                                </button>
                                                <?php
                                                echo form_close();
                                                ?>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="  shadow h-100">
                                                <?php
                                                echo form_open_multipart('reporte/vermasvendido');
                                                ?>
                                                <button type="submit" style="border-radius: 20px " class=" btn btn-block btn-info">
                                                    <img style="border-radius: 10px " src="<?php echo  base_url(); ?>uploads/iconos_images/masVendido.png" width="100px" height="100px" alt="Ver ventas">
                                                    <br> Ver Productos mas vendido
                                                </button>
                                                <?php
                                                echo form_close();
                                                ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- Inicio Div card-box table-responsive -->
                            </div><!-- Fin Div col-sm-12 2 -->
                        </div><!-- Fin Div row 2 -->
                    </div><!-- Fin Div x_content -->
                </div><!-- Fin Div container md-3 -->
            </div><!-- Fin Right Col Role Main -->





            <!---------------------------------------GRAFICOS------------------------------------------------- -->



            <div class="col-md-12 col-sm-12 ">
                <div class="row">
                    <!-- Inicio Div row -->
                    <div class="col-md-12 col-sm-12 ">
                        <!-- Inicio Div col-md-12 col-sm-12  -->
                        <div class="x_panel">
                            <!-- Inicio Div x_panel -->
                            <div class="x_title">
                                <h2><i class="fa fa-spinner"></i> Graficos.</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                        <div>
                                            <!-- Inicio Div card-box table-responsive -->

                                            <!------------------------------------------------------------------------------->

                                            <div class="col-md-12 col-sm-6  ">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Prueva</h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                                </div>
                                                            </li>
                                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">

                                                        <div id="echart_line" style="height:350px;"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-4  ">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Productos mas vendidos!</h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                                </div>
                                                            </li>
                                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">

                                                        <div id="echart_pie2" style="height:350px;"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4  ">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Reporte de clientes por mes</h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                                </div>
                                                            </li>
                                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">

                                                        <div id="echart_pie" style="height:350px;"></div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-4  ">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Cantidad de productos por marcas</h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                                </div>
                                                            </li>
                                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">

                                                        <div id="echart_donut" style="height:350px;"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!---- ------------------------------------------------------------------------------------------------------------>

                                            <!-- /bar charts group -->

                                            <?php echo form_close(); ?>
                                            <?php //inicio de los foreach
                                            foreach ($totalproductosmodelo->result() as $rowtotalproductosmodelo) {
                                            ?>
                                                <div class="col-md-6 col-sm-6  ">
                                                    <div class="x_panel">
                                                        <div class="x_title ">
                                                            <h5 class="font-weight-bold text-dark">PRODUCTOS DE LA MARCA <?php echo $rowtotalproductosmodelo->nombre2; ?> <?php echo $rowtotalproductosmodelo->totalb; ?> </h5>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <div id="graficoDonutModelo1" style="width:100%; height:300px;"></div>
                                                            <div class="item justify-content-center text-dark">
                                                                <h2 style="color:black;">■</h2>
                                                                <h2>TRIGO</h2>
                                                                <h2 style="color:red;">■</h2>
                                                                <h2>ARROZ</h2>
                                                                <h2 style="color:#BDB76B;">■</h2>
                                                                <h2>HUEVO</h2>
                                                                <h2 style="color:#37DED6;">■</h2>
                                                                <h2>ALMIDON</h2><br><br>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6  ">
                                                    <div class="x_panel">
                                                        <div class="x_title ">
                                                            <h5 class="font-weight-bold text-dark">PRODUCTOS DE LA MARCA <?php echo $rowtotalproductosmodelo->nombre1; ?> <?php echo $rowtotalproductosmodelo->totala; ?> </h5>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <div id="graficoDonutModelo" style="width:100%; height:300px;"></div>
                                                            <div class="item justify-content-center text-dark">
                                                                <h2 style="color:black;">■</h2>
                                                                <h2>TRIGO</h2>
                                                                <h2 style="color:red;">■</h2>
                                                                <h2>ARROZ</h2>
                                                                <h2 style="color:#BDB76B;">■</h2>
                                                                <h2>HUEVO</h2>
                                                                <h2 style="color:#37DED6;">■</h2>
                                                                <h2>ALMIDON</h2><br><br>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6  ">
                                                    <div class="x_panel">
                                                        <div class="x_title ">
                                                            <h5 class="font-weight-bold text-dark">PRODUCTOS DE LA MARCA <?php echo $rowtotalproductosmodelo->nombre3; ?> <?php echo $rowtotalproductosmodelo->totalc; ?> </h5>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <div id="graficoDonutModelo2" style="width:100%; height:300px;"></div>
                                                            <div class="item justify-content-center text-dark">
                                                                <h2 style="color:black;">■</h2>
                                                                <h2>TRIGO</h2>
                                                                <h2 style="color:red;">■</h2>
                                                                <h2>ARROZ</h2>
                                                                <h2 style="color:#BDB76B;">■</h2>
                                                                <h2>HUEVO</h2>
                                                                <h2 style="color:#37DED6;">■</h2>
                                                                <h2>ALMIDON</h2><br><br>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6  ">
                                                    <div class="x_panel">
                                                        <div class="x_title ">
                                                            <h5 class="font-weight-bold text-dark">PRODUCTOS DE LA MARCA <?php echo $rowtotalproductosmodelo->nombre4; ?> <?php echo $rowtotalproductosmodelo->totald; ?> </h5>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <div id="graficoDonutModelo3" style="width:100%; height:300px;"></div>
                                                            <div class="item justify-content-center text-dark">
                                                                <h2 style="color:black;">■</h2>
                                                                <h2>TRIGO</h2>
                                                                <h2 style="color:red;">■</h2>
                                                                <h2>ARROZ</h2>
                                                                <h2 style="color:#BDB76B;">■</h2>
                                                                <h2>HUEVO</h2>
                                                                <h2 style="color:#37DED6;">■</h2>
                                                                <h2>ALMIDON</h2><br><br>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="clearfix"></div>



                                                <script>
                                                    Morris.Donut({
                                                        element: 'graficoDonutModelo',
                                                        data: [{
                                                                label: "FIDEOS DE HARINA DE TRIGO",
                                                                value: <?php echo $rowtotalproductosmodelo->LA_SUPREMA1; ?>,
                                                                color: 'black'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ARROZ",
                                                                value: <?php echo $rowtotalproductosmodelo->LA_SUPREMA2; ?>,
                                                                color: 'red'
                                                            },
                                                            {
                                                                label: "FIDEOS DE TRIGO Y HUEVO",
                                                                value: <?php echo $rowtotalproductosmodelo->LA_SUPREMA3; ?>,
                                                                color: '#BDB76B'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ALMIDON",
                                                                value: <?php echo $rowtotalproductosmodelo->LA_SUPREMA4; ?>,
                                                                color: '#37DED6'
                                                            }

                                                        ]
                                                    });

                                                    Morris.Donut({
                                                        element: 'graficoDonutModelo1',
                                                        data: [{
                                                                label: "FIDEOS DE HARINA DE TRIGO",
                                                                value: <?php echo $rowtotalproductosmodelo->BONABELI1; ?>,
                                                                color: 'black'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ARROZ",
                                                                value: <?php echo $rowtotalproductosmodelo->BONABELI2; ?>,
                                                                color: 'red'
                                                            },
                                                            {
                                                                label: "FIDEOS DE TRIGO Y HUEVO",
                                                                value: <?php echo $rowtotalproductosmodelo->BONABELI3; ?>,
                                                                color: '#BDB76B'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ALMIDON",
                                                                value: <?php echo $rowtotalproductosmodelo->BONABELI4; ?>,
                                                                color: '#37DED6'
                                                            }

                                                        ]
                                                    });
                                                    Morris.Donut({
                                                        element: 'graficoDonutModelo2',
                                                        data: [{
                                                                label: "FIDEOS DE HARINA DE TRIGO",
                                                                value: <?php echo $rowtotalproductosmodelo->LAZZARONI1; ?>,
                                                                color: 'black'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ARROZ",
                                                                value: <?php echo $rowtotalproductosmodelo->LAZZARONI2; ?>,
                                                                color: 'red'
                                                            },
                                                            {
                                                                label: "FIDEOS DE TRIGO Y HUEVO",
                                                                value: <?php echo $rowtotalproductosmodelo->LAZZARONI3; ?>,
                                                                color: '#BDB76B'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ALMIDON",
                                                                value: <?php echo $rowtotalproductosmodelo->LAZZARONI4; ?>,
                                                                color: '#37DED6'
                                                            }

                                                        ]
                                                    });

                                                    Morris.Donut({
                                                        element: 'graficoDonutModelo3',
                                                        data: [{
                                                                label: "FIDEOS DE HARINA DE TRIGO",
                                                                value: <?php echo $rowtotalproductosmodelo->EMILIANA1; ?>,
                                                                color: 'black'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ARROZ",
                                                                value: <?php echo $rowtotalproductosmodelo->EMILIANA2; ?>,
                                                                color: 'red'
                                                            },
                                                            {
                                                                label: "FIDEOS DE TRIGO Y HUEVO",
                                                                value: <?php echo $rowtotalproductosmodelo->EMILIANA3; ?>,
                                                                color: '#BDB76B'
                                                            },
                                                            {
                                                                label: "FIDEOS DE ALMIDON",
                                                                value: <?php echo $rowtotalproductosmodelo->EMILIANA4; ?>,
                                                                color: '#37DED6'
                                                            }

                                                        ]
                                                    });



                                                    Morris.Area({
                                                        // ID of the element in which to draw the chart.
                                                        element: 'myfirstchart',
                                                        // Chart data records -- each entry in this array corresponds to a point on
                                                        // the chart.
                                                        data: [{
                                                                month: '1',
                                                                val: <?php echo $rowtotalproductosmodelo->BONABELI4; ?>
                                                            },
                                                            {
                                                                month: '2',
                                                                val: <?php echo $rowtotalproductosmodelo->BONABELI4; ?>
                                                            },
                                                            {
                                                                month: '3',
                                                                val: <?php echo $rowtotalproductosmodelo->BONABELI4; ?>
                                                            },
                                                            {
                                                                month: '4',
                                                                val: <?php echo $rowtotalproductosmodelo->BONABELI4; ?>
                                                            },

                                                        ],
                                                        // The name of the data record attribute that contains x-values.
                                                        xkey: 'month',
                                                        // A list of names of data record attributes that contain y-values.
                                                        ykeys: ['val'],
                                                        // Labels for the ykeys -- will be displayed when you hover over the
                                                        // chart.
                                                        labels: ['month'],
                                                        hideHover: 'auto'
                                                    });
                                                    //----------------------------------------------------------------------eChar--------------------------------------------------------------------------------------------------
                                                    var e = {
                                                        color: [
                                                            "#26B99A",
                                                            "#34495E",
                                                            "#BDC3C7",
                                                            "#3498DB",
                                                            "#9B59B6",
                                                            "#8abb6f",
                                                            "#759c6a",
                                                            "#bfd3b7",
                                                        ],
                                                        title: {
                                                            itemGap: 8,
                                                            textStyle: {
                                                                fontWeight: "normal",
                                                                color: "#408829"
                                                            },
                                                        },
                                                        dataRange: {
                                                            color: ["#1f610a", "#97b58d"]
                                                        },
                                                        toolbox: {
                                                            color: ["#408829", "#408829", "#408829", "#408829"]
                                                        },
                                                        tooltip: {
                                                            backgroundColor: "rgba(0,0,0,0.5)",
                                                            axisPointer: {
                                                                type: "line",
                                                                lineStyle: {
                                                                    color: "#408829",
                                                                    type: "dashed"
                                                                },
                                                                crossStyle: {
                                                                    color: "#408829"
                                                                },
                                                                shadowStyle: {
                                                                    color: "rgba(200,200,200,0.3)"
                                                                },
                                                            },
                                                        },
                                                        dataZoom: {
                                                            dataBackgroundColor: "#eee",
                                                            fillerColor: "rgba(64,136,41,0.2)",
                                                            handleColor: "#408829",
                                                        },
                                                        grid: {
                                                            borderWidth: 0
                                                        },
                                                        categoryAxis: {
                                                            axisLine: {
                                                                lineStyle: {
                                                                    color: "#408829"
                                                                }
                                                            },
                                                            splitLine: {
                                                                lineStyle: {
                                                                    color: ["#eee"]
                                                                }
                                                            },
                                                        },
                                                        valueAxis: {
                                                            axisLine: {
                                                                lineStyle: {
                                                                    color: "#408829"
                                                                }
                                                            },
                                                            splitArea: {
                                                                show: !0,
                                                                areaStyle: {
                                                                    color: ["rgba(250,250,250,0.1)", "rgba(200,200,200,0.1)"],
                                                                },
                                                            },
                                                            splitLine: {
                                                                lineStyle: {
                                                                    color: ["#eee"]
                                                                }
                                                            },
                                                        },
                                                        timeline: {
                                                            lineStyle: {
                                                                color: "#408829"
                                                            },
                                                            controlStyle: {
                                                                normal: {
                                                                    color: "#408829"
                                                                },
                                                                emphasis: {
                                                                    color: "#408829"
                                                                },
                                                            },
                                                        },
                                                        k: {
                                                            itemStyle: {
                                                                normal: {
                                                                    color: "#68a54a",
                                                                    color0: "#a9cba2",
                                                                    lineStyle: {
                                                                        width: 1,
                                                                        color: "#408829",
                                                                        color0: "#86b379"
                                                                    },
                                                                },
                                                            },
                                                        },
                                                        map: {
                                                            itemStyle: {
                                                                normal: {
                                                                    areaStyle: {
                                                                        color: "#ddd"
                                                                    },
                                                                    label: {
                                                                        textStyle: {
                                                                            color: "#c12e34"
                                                                        }
                                                                    },
                                                                },
                                                                emphasis: {
                                                                    areaStyle: {
                                                                        color: "#99d2dd"
                                                                    },
                                                                    label: {
                                                                        textStyle: {
                                                                            color: "#c12e34"
                                                                        }
                                                                    },
                                                                },
                                                            },
                                                        },
                                                        force: {
                                                            itemStyle: {
                                                                normal: {
                                                                    linkStyle: {
                                                                        strokeColor: "#408829"
                                                                    }
                                                                }
                                                            },
                                                        },
                                                        chord: {
                                                            padding: 4,
                                                            itemStyle: {
                                                                normal: {
                                                                    lineStyle: {
                                                                        width: 1,
                                                                        color: "rgba(128, 128, 128, 0.5)"
                                                                    },
                                                                    chordStyle: {
                                                                        lineStyle: {
                                                                            width: 1,
                                                                            color: "rgba(128, 128, 128, 0.5)"
                                                                        },
                                                                    },
                                                                },
                                                                emphasis: {
                                                                    lineStyle: {
                                                                        width: 1,
                                                                        color: "rgba(128, 128, 128, 0.5)"
                                                                    },
                                                                    chordStyle: {
                                                                        lineStyle: {
                                                                            width: 1,
                                                                            color: "rgba(128, 128, 128, 0.5)"
                                                                        },
                                                                    },
                                                                },
                                                            },
                                                        },
                                                        gauge: {
                                                            startAngle: 225,
                                                            endAngle: -45,
                                                            axisLine: {
                                                                show: !0,
                                                                lineStyle: {
                                                                    color: [
                                                                        [0.2, "#86b379"],
                                                                        [0.8, "#68a54a"],
                                                                        [1, "#408829"],
                                                                    ],
                                                                    width: 8,
                                                                },
                                                            },
                                                            axisTick: {
                                                                splitNumber: 10,
                                                                length: 12,
                                                                lineStyle: {
                                                                    color: "auto"
                                                                }
                                                            },
                                                            axisLabel: {
                                                                textStyle: {
                                                                    color: "auto"
                                                                }
                                                            },
                                                            splitLine: {
                                                                length: 18,
                                                                lineStyle: {
                                                                    color: "auto"
                                                                }
                                                            },
                                                            pointer: {
                                                                length: "90%",
                                                                color: "auto"
                                                            },
                                                            title: {
                                                                textStyle: {
                                                                    color: "#333"
                                                                }
                                                            },
                                                            detail: {
                                                                textStyle: {
                                                                    color: "auto"
                                                                }
                                                            },
                                                        },
                                                        textStyle: {
                                                            fontFamily: "Arial, Verdana, sans-serif"
                                                        },
                                                    };
                                                </script>

                                                <script>
                                                    const datos2020 = [];
                                                    const datos2021 = [];
                                                    const datos2022 = [];
                                                    const dato1 = [];
                                                    const dato2 = [];
                                                    const dato3 = [];
                                                    $(document).ready(function() {
                                                        $.ajax({
                                                            url: "<?= base_url() ?>index.php/reporte/ventaList",
                                                            type: 'post',
                                                            dataType: "json",
                                                            success: function(data) {

                                                                for (let index = 0; index < data.length; index++) {

                                                                    if (data[index].veinte) {
                                                                        datos2020.push(data[index].veinte);
                                                                    } else if (data[index].veintiuno) {
                                                                        datos2021.push(data[index].veintiuno);
                                                                    } else if (data[index].veintidos) {
                                                                        datos2022.push(data[index].veintidos);
                                                                    }
                                                                }

                                                                for (const iterator of datos2020) {
                                                                    dato1.push(iterator.total);
                                                                }
                                                                for (const iterator of datos2021) {
                                                                    dato2.push(iterator.total);
                                                                }
                                                                for (const iterator of datos2022) {
                                                                    dato3.push(iterator.total);
                                                                }
                                                                // console.log(dato1, dato2, dato3);
                                                                llamarChart(dato1, dato2, dato3);



                                                            },
                                                            error: function(xhr, status) {
                                                                alert('Disculpe, existió un problema');
                                                            },
                                                        });

                                                    });





                                                    const llamarChart = (datos2020, datos2021, datos2022) => {
                                                        echarts.init(document.getElementById("echart_line"), e).setOption({
                                                            title: {
                                                                text: "reporte de ingresos",
                                                                subtext: "                 total Bs."
                                                            },
                                                            tooltip: {
                                                                trigger: "axis"
                                                            },
                                                            legend: {
                                                                x: 220,
                                                                y: 40,
                                                                data: ["Ventas 2020", "Ventas 2021", "Ventas 2022"]
                                                            },
                                                            toolbox: {
                                                                show: !0,
                                                                feature: {
                                                                    magicType: {
                                                                        show: !0,
                                                                        title: {
                                                                            line: "Line",
                                                                            bar: "Bar",
                                                                            stack: "Stack",
                                                                            tiled: "Tiled",
                                                                        },
                                                                        type: ["line", "bar", "stack", "tiled"],
                                                                    },
                                                                    restore: {
                                                                        show: !0,
                                                                        title: "Restore"
                                                                    },
                                                                    saveAsImage: {
                                                                        show: !0,
                                                                        title: "Save Image"
                                                                    },
                                                                },
                                                            },
                                                            calculable: !0,
                                                            xAxis: [{
                                                                type: "category",
                                                                boundaryGap: !1,
                                                                data: ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"],
                                                            }, ],
                                                            yAxis: [{
                                                                type: "value"
                                                            }],
                                                            series: [{
                                                                    name: "Ventas 2020",
                                                                    type: "line",
                                                                    smooth: !0,
                                                                    itemStyle: {
                                                                        normal: {
                                                                            areaStyle: {
                                                                                type: "default"
                                                                            }
                                                                        }
                                                                    },
                                                                    data: datos2020,
                                                                },
                                                                {
                                                                    name: "Ventas 2021",
                                                                    type: "line",
                                                                    smooth: !0,
                                                                    itemStyle: {
                                                                        normal: {
                                                                            areaStyle: {
                                                                                type: "default"
                                                                            }
                                                                        }
                                                                    },
                                                                    data: datos2021,
                                                                },
                                                                {
                                                                    name: "Ventas 2022",
                                                                    type: "line",
                                                                    smooth: !0,
                                                                    itemStyle: {
                                                                        normal: {
                                                                            areaStyle: {
                                                                                type: "default"
                                                                            }
                                                                        }
                                                                    },
                                                                    data: datos2022,
                                                                }
                                                            ],

                                                        });

                                                    }





                                                    $(document).ready(function() {
                                                        $.ajax({
                                                            url: "<?= base_url() ?>index.php/reporte/mayoresVentasList",
                                                            type: 'post',
                                                            dataType: "json",
                                                            success: function(data) {

                                                                const names = [];

                                                                for (const iterator of data) {
                                                                    names.push(iterator.name);
                                                                }

                                                                llamarChart2(data, names);
                                                            },
                                                            error: function(xhr, status) {
                                                                alert('Disculpe, existió un problema');
                                                            },
                                                        });

                                                    });

                                                    const llamarChart2 = (data, names) => {
                                                        echarts.init(document.getElementById("echart_pie2"), e).setOption({
                                                            tooltip: {
                                                                trigger: "item",
                                                                formatter: "{a} <br/>{b} : {c} ({d}%)"
                                                            },
                                                            legend: {
                                                                x: "center",
                                                                y: "bottom",
                                                                data: names,
                                                            },
                                                            toolbox: {
                                                                show: !0,
                                                                feature: {
                                                                    magicType: {
                                                                        show: !0,
                                                                        type: ["pie", "funnel"]
                                                                    },
                                                                    restore: {
                                                                        show: !0,
                                                                        title: "Restore"
                                                                    },
                                                                    saveAsImage: {
                                                                        show: !0,
                                                                        title: "Save Image"
                                                                    },
                                                                },
                                                            },
                                                            calculable: !0,
                                                            series: [{
                                                                name: "Area Mode",
                                                                type: "pie",
                                                                radius: [25, 90],
                                                                center: ["50%", 170],
                                                                roseType: "area",
                                                                x: "50%",
                                                                max: 40,
                                                                sort: "ascending",
                                                                data: data,
                                                            }, ],
                                                        });
                                                    }




                                                    $(document).ready(function() {
                                                        $.ajax({
                                                            url: "<?= base_url() ?>index.php/reporte/mayoresClientes",
                                                            type: 'post',
                                                            dataType: "json",
                                                            success: function(data) {

                                                                const names = [];

                                                                for (const iterator of data) {
                                                                    names.push(iterator.name);
                                                                }

                                                                llamarChart3(data, names);
                                                            },
                                                            error: function(xhr, status) {
                                                                alert('Disculpe, existió un problema');
                                                            },
                                                        });

                                                    });



                                                    const llamarChart3 = (data, names) => {

                                                        echarts.init(document.getElementById("echart_pie"), e).setOption({
                                                            tooltip: {
                                                                trigger: "item",
                                                                formatter: "{a} <br/>{b} : {c} ({d}%)"
                                                            },
                                                            legend: {
                                                                x: "center",
                                                                y: "bottom",
                                                                data: names,
                                                            },
                                                            toolbox: {
                                                                show: !0,
                                                                feature: {
                                                                    magicType: {
                                                                        show: !0,
                                                                        type: ["pie", "funnel"],
                                                                        option: {
                                                                            funnel: {
                                                                                x: "25%",
                                                                                width: "50%",
                                                                                funnelAlign: "left",
                                                                                max: 1548,
                                                                            },
                                                                        },
                                                                    },
                                                                    restore: {
                                                                        show: !0,
                                                                        title: "Restore"
                                                                    },
                                                                    saveAsImage: {
                                                                        show: !0,
                                                                        title: "Save Image"
                                                                    },
                                                                },
                                                            },
                                                            calculable: !0,
                                                            series: [{
                                                                name: "Cantidad de clientes",
                                                                type: "pie",
                                                                radius: "55%",
                                                                center: ["50%", "48%"],
                                                                data: data,
                                                            }, ],
                                                        });
                                                        var a = {
                                                                normal: {
                                                                    label: {
                                                                        show: !1
                                                                    },
                                                                    labelLine: {
                                                                        show: !1
                                                                    }
                                                                }
                                                            },
                                                            t = {
                                                                normal: {
                                                                    color: "rgba(0,0,0,0)",
                                                                    label: {
                                                                        show: !1
                                                                    },
                                                                    labelLine: {
                                                                        show: !1
                                                                    },
                                                                },
                                                                emphasis: {
                                                                    color: "rgba(0,0,0,0)"
                                                                },
                                                            };
                                                    }

                                                    $(document).ready(function() {
                                                        $.ajax({
                                                            url: "<?= base_url() ?>index.php/reporte/contadorProductos",
                                                            type: 'post',
                                                            dataType: "json",
                                                            success: function(data) {

                                                                const names = [];

                                                                for (const iterator of data) {
                                                                    names.push(iterator.name);
                                                                }

                                                                chart3(data, names);
                                                            },
                                                            error: function(xhr, status) {
                                                                alert('Disculpe, existió un problema');
                                                            },
                                                        });

                                                    });

                                                    const chart3 = (data, names) => {
                                                        echarts.init(document.getElementById("echart_donut"), e).setOption({
                                                            tooltip: {
                                                                trigger: "item",
                                                                formatter: "{a} <br/>{b} : {c} ({d}%)"
                                                            },
                                                            calculable: !0,
                                                            legend: {
                                                                x: "center",
                                                                y: "bottom",
                                                                data: names,
                                                            },
                                                            toolbox: {
                                                                show: !0,
                                                                feature: {
                                                                    magicType: {
                                                                        show: !0,
                                                                        type: ["pie", "funnel"],
                                                                        option: {
                                                                            funnel: {
                                                                                x: "25%",
                                                                                width: "50%",
                                                                                funnelAlign: "center",
                                                                                max: 1548,
                                                                            },
                                                                        },
                                                                    },
                                                                    restore: {
                                                                        show: !0,
                                                                        title: "Restore"
                                                                    },
                                                                    saveAsImage: {
                                                                        show: !0,
                                                                        title: "Save Image"
                                                                    },
                                                                },
                                                            },
                                                            series: [{
                                                                name: "Access to the resource",
                                                                type: "pie",
                                                                radius: ["35%", "55%"],
                                                                itemStyle: {
                                                                    normal: {
                                                                        label: {
                                                                            show: !0
                                                                        },
                                                                        labelLine: {
                                                                            show: !0
                                                                        }
                                                                    },
                                                                    emphasis: {
                                                                        label: {
                                                                            show: !0,
                                                                            position: "center",
                                                                            textStyle: {
                                                                                fontSize: "14",
                                                                                fontWeight: "normal"
                                                                            },
                                                                        },
                                                                    },
                                                                },
                                                                data: data,
                                                            }, ],
                                                        });
                                                    }
                                                </script>

                                            <?php //fin de los foreach
                                            }
                                            ?>
                                        </div><!-- Inicio Div card-box table-responsive -->
                                    </div><!-- Fin Div col-sm-12 2 -->
                                </div><!-- Fin Div row 2 -->
                            </div><!-- Fin Div x_content -->
                        </div><!-- Fin Div container md-3 -->
                    </div><!-- Fin Right Col Role Main -->
                </div>
            </div>
        </div>
    </div>
</div>