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
                        <h2>Ingrese nueva Sucuersal.</h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <!-- Inicio Div x_content -->
                        <?php
                        echo form_open_multipart('sucuºººrsal/index');
                        ?>
                        <button type="submit" name="buttonInhabilitados" class="btn btn-outline-success">
                            <i class="fa fa-arrow-circle-left"></i> Volver a sucursal.
                        </button>
                        <?php
                        echo form_close();
                        ?>
                        <br>
                        <p class="text-muted font-13 m-b-30">
                            Usted va a insertar una nueva categoría de producto, por favor llene el siguiente campo:
                        </p>
                        <?php
                        echo form_open_multipart('sucursal/agregarbd');
                        ?>
                        <div class="item form-group has-feedback">
                            <label class="col-form-label col-md-1 label-align" for="sucursal">Nombre de sucursal:</label>
                            <div class="col-md">
                                <input type="text" name="nombresucursal" class="form-control has-feedback-left" value="<?php echo set_value('nombresucursal'); ?>">
                                <span class="fa fa-pencil-square-o form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('nombresucursal'); ?>
                            </div>
                            <label class="col-form-label col-md-1 label-align" for="sucursal">direccion de la sucursal:</label>
                            <div class="col-md">
                                <input type="text" name="direccion" class="form-control has-feedback-left" value="<?php echo set_value('direccion'); ?>">
                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                <?php echo form_error('direccion'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus-circle"></i> Insertar
                        </button>
                        <?php
                        echo form_close();
                        ?>
                    </div><!-- Fin Div x_content -->
                </div><!-- Fin Div x_panel -->
            </div><!-- Fin Div col-md-12 col-sm-12  -->
        </div><!-- Fin Div row -->
    </div><!-- Fin Div container md-3 -->
</div><!-- Fin Right Col Role Main -->